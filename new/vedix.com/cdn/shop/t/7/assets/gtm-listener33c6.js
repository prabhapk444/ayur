/** Shopify CDN: Minification failed

Line 19:2 Transforming const to the configured target environment ("es5") is not supported yet
Line 22:22 Transforming rest arguments to the configured target environment ("es5") is not supported yet
Line 24:10 Transforming rest arguments to the configured target environment ("es5") is not supported yet
Line 29:2 Transforming const to the configured target environment ("es5") is not supported yet
Line 38:2 Transforming const to the configured target environment ("es5") is not supported yet
Line 39:2 Transforming const to the configured target environment ("es5") is not supported yet
Line 40:4 Transforming const to the configured target environment ("es5") is not supported yet
Line 43:2 Transforming let to the configured target environment ("es5") is not supported yet
Line 44:2 Transforming const to the configured target environment ("es5") is not supported yet
Line 44:24 Transforming async functions to the configured target environment ("es5") is not supported yet
... and 8 more hidden warnings

**/
!function() {
  "use strict";

  const logger = e => {
      console.error("GTM SS Suite:", e)
    },
    tcWrapper = e => (...r) => {
      try {
        e(...r)
      } catch (e) {
        logger(e)
      }
    };
  const suiteVars = {
    userId: "___SKVX_GTM_SUITE--userId",
    lastCollectionPathname: "___SKVX_GTM_SUITE--lastCollectionPathname",
    userOnSignupPath: "___SKVX_GTM_SUITE--userOnSignupPath",
    userLoggedIn: "___SKVX_GTM_SUITE--userLoggedIn",
    cart: "___SKVX_GTM_SUITE--cart",
    cookies: "___SKVX_GTM_SUITE--cookies",
    params: "___SKVX_GTM_SUITE--params"
  };
  const suiteDefaultEvents = ["dl_add_payment_info", "dl_add_shipping_info", "dl_add_to_cart", "dl_begin_checkout", "dl_login", "dl_purchase", "dl_remove_from_cart", "dl_select_item", "dl_sign_up", "dl_subscription_purchase", "dl_user_data", "dl_view_cart", "dl_view_item", "dl_view_item_list", "dl_view_search_results", "vpqComplete", "VPQClick"];
  const getCookiesFromStorage = () => {
    const e = localStorage.getItem(suiteVars.cookies);
    return null !== e ? JSON.parse(e) : {}
  };
  let mergedEvent = {};
  const handleDLEvent = async (dlEvent, ssUrl) => {
    const storedCookies = getCookiesFromStorage();
    const userDataEvent = window.dataLayer.find(r => r.event === "dl_user_data");
    const marketingCookies = {
      ...storedCookies._fbp && {
        _fbp: storedCookies._fbp
      },
      ...storedCookies._fbc && {
        _fbc: storedCookies._fbc
      },
      ...storedCookies._ga && {
        _ga: storedCookies._ga
      }
    };
    mergedEvent = {
      ...mergedEvent,
      ...dlEvent,
      marketing: {
        ...dlEvent.marketing,
        ...marketingCookies
      }
    };
    if (userDataEvent) {
      if(mergedEvent.user_properties) {
        mergedEvent.user_properties = {
          ...mergedEvent.user_properties,
          ...userDataEvent.user_properties,
        };
      } else {
        mergedEvent.user_properties = userDataEvent.user_properties;
      }
    }
    if(dlEvent.event && suiteDefaultEvents.includes(dlEvent.event)) {
      const searchParams = new URLSearchParams({
        source_url: encodeURIComponent(document.location.href),
      });
      const finalUrl = `${ssUrl}/browserEvents?${searchParams.toString()}`;
      await fetch(finalUrl, {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify(mergedEvent)
      });
    }
  };
  const methods = {
    listen: ssUrl => {
      window.dataLayer = window.dataLayer ?? [];
      //send already pushed events
      window.dataLayer.forEach(t => {
        handleDLEvent(t, ssUrl);
      });
      //listen and send future events
      const t = window.dataLayer.push;
      window.dataLayer.push = function(...n) {
        n.forEach(t => {
          handleDLEvent(t, ssUrl)
        });
        return t.apply(window.dataLayer, Array.prototype.slice.call(arguments, 0));
      }
    }
  };
  window.SkVxGtmSuiteListener = {
    handlers: {
      listen: tcWrapper(methods.listen)
    }
  };
}();
