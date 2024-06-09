/** Shopify CDN: Minification failed

Line 20:4 Transforming const to the configured target environment ("es5") is not supported yet
Line 23:26 Transforming rest arguments to the configured target environment ("es5") is not supported yet
Line 25:18 Transforming rest arguments to the configured target environment ("es5") is not supported yet
Line 30:30 Transforming async functions to the configured target environment ("es5") is not supported yet
Line 30:37 Transforming rest arguments to the configured target environment ("es5") is not supported yet
Line 32:24 Transforming rest arguments to the configured target environment ("es5") is not supported yet
Line 45:4 Transforming const to the configured target environment ("es5") is not supported yet
Line 54:4 Transforming const to the configured target environment ("es5") is not supported yet
Line 55:8 Transforming const to the configured target environment ("es5") is not supported yet
Line 58:4 Transforming const to the configured target environment ("es5") is not supported yet
... and 147 more hidden warnings

**/
! function() {
    "use strict";

    //utils
    const logger = e => {
            console.error("GTM Suite:", e)
        },
        tcWrapper = e => (...r) => {
            try {
                e(...r)
            } catch (e) {
                logger(e)
            }
        },
        asyncTcWrapper = e => async (...r) => {
            try {
                await e(...r)
            } catch (e) {
                logger(e)
            }
        };

    //uuid
    !function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):(t="undefined"!=typeof globalThis?globalThis:t||self).uuidv4=e()}(this,(function(){"use strict";var t,e=new Uint8Array(16);function o(){if(!t&&!(t="undefined"!=typeof crypto&&crypto.getRandomValues&&crypto.getRandomValues.bind(crypto)||"undefined"!=typeof msCrypto&&"function"==typeof msCrypto.getRandomValues&&msCrypto.getRandomValues.bind(msCrypto)))throw new Error("crypto.getRandomValues() not supported. See https://github.com/uuidjs/uuid#getrandomvalues-not-supported");return t(e)}var n=/^(?:[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}|00000000-0000-0000-0000-000000000000)$/i;function r(t){return"string"==typeof t&&n.test(t)}for(var i=[],u=0;u<256;++u)i.push((u+256).toString(16).substr(1));return function(t,e,n){var u=(t=t||{}).random||(t.rng||o)();if(u[6]=15&u[6]|64,u[8]=63&u[8]|128,e){n=n||0;for(var f=0;f<16;++f)e[n+f]=u[f];return e}return function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,o=(i[t[e+0]]+i[t[e+1]]+i[t[e+2]]+i[t[e+3]]+"-"+i[t[e+4]]+i[t[e+5]]+"-"+i[t[e+6]]+i[t[e+7]]+"-"+i[t[e+8]]+i[t[e+9]]+"-"+i[t[e+10]]+i[t[e+11]]+i[t[e+12]]+i[t[e+13]]+i[t[e+14]]+i[t[e+15]]).toLowerCase();if(!r(o))throw TypeError("Stringified UUID is invalid");return o}(u)}}));

    /*! js-cookie v3.0.1 | MIT */
    !function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self,function(){var n=e.Cookies,o=e.Cookies=t();o.noConflict=function(){return e.Cookies=n,o}}())}(this,(function(){"use strict";function e(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)e[o]=n[o]}return e}return function t(n,o){function r(t,r,i){if("undefined"!=typeof document){"number"==typeof(i=e({},o,i)).expires&&(i.expires=new Date(Date.now()+864e5*i.expires)),i.expires&&(i.expires=i.expires.toUTCString()),t=encodeURIComponent(t).replace(/%(2[346B]|5E|60|7C)/g,decodeURIComponent).replace(/[()]/g,escape);var c="";for(var u in i)i[u]&&(c+="; "+u,!0!==i[u]&&(c+="="+i[u].split(";")[0]));return document.cookie=t+"="+n.write(r,t)+c}}return Object.create({set:r,get:function(e){if("undefined"!=typeof document&&(!arguments.length||e)){for(var t=document.cookie?document.cookie.split("; "):[],o={},r=0;r<t.length;r++){var i=t[r].split("="),c=i.slice(1).join("=");try{var u=decodeURIComponent(i[0]);if(o[u]=n.read(c,u),e===u)break}catch(e){}}return e?o[e]:o}},remove:function(t,n){r(t,"",e({},n,{expires:-1}))},withAttributes:function(n){return t(this.converter,e({},this.attributes,n))},withConverter:function(n){return t(e({},this.converter,n),this.attributes)}},{attributes:{value:Object.freeze(o)},converter:{value:Object.freeze(n)}})}({read:function(e){return'"'===e[0]&&(e=e.slice(1,-1)),e.replace(/(%[\dA-F]{2})+/gi,decodeURIComponent)},write:function(e){return encodeURIComponent(e).replace(/%(2[346BF]|3[AC-F]|40|5[BDE]|60|7[BCD])/g,decodeURIComponent)}},{path:"/"})}));

    //local storage
    const suiteVars = {
        userId: "___SKVX_GTM_SUITE--userId",
        lastCollectionPathname: "___SKVX_GTM_SUITE--lastCollectionPathname",
        userOnSignupPath: "___SKVX_GTM_SUITE--userOnSignupPath",
        userLoggedIn: "___SKVX_GTM_SUITE--userLoggedIn",
        cart: "___SKVX_GTM_SUITE--cart",
        cookies: "___SKVX_GTM_SUITE--cookies",
        params: "___SKVX_GTM_SUITE--params"
    };
    const getMarketingParams = () => {
        const e = localStorage.getItem(suiteVars.params);
        return null !== e ? JSON.parse(e) : {}
    };
    const getCookiesFromStorage = () => {
        const e = localStorage.getItem(suiteVars.cookies);
        return null !== e ? JSON.parse(e) : {}
    };
    const storeCart = e => {
        localStorage.setItem(suiteVars.cart, JSON.stringify(e))
    };
    const getCart = () => {
        const e = localStorage.getItem(suiteVars.cart);
        if (null === e) return [];
        return JSON.parse(e)
            .map(({ image, ...t}) => {
                return {
                    ...t,
                    image: "string" == typeof image || null === image ? image : image.url
                };
            })
    };
    const getLastCollectionPath = () => {
        try {
            return localStorage.getItem(suiteVars.lastCollectionPathname) ?? "";
        } catch {
            return "";
        }
    };
    const storeLastCollectionPath = e => {
        try {
            localStorage.setItem(suiteVars.lastCollectionPathname, e)
        } catch {

        }
    };
    const getUserId = () => {
        const e = localStorage.getItem(suiteVars.userId);
        if (null === e) {
            const e = uuidv4();
            storeUserId(e);
            return e;
        }
        return e
    };
    const storeUserId = e => {
        try {
            localStorage.setItem(suiteVars.userId, e)
        } catch {

        }
    };
    const getSignupPath = () => Boolean(localStorage.getItem(suiteVars.userOnSignupPath));
    const storeSignupPath = e => {
        e ? localStorage.setItem(suiteVars.userOnSignupPath, "true") : localStorage.removeItem(suiteVars.userOnSignupPath)
    };
    const getLoggedInStatus = () => Boolean(localStorage.getItem(suiteVars.userLoggedIn));
    const storeLoggedInStatus = e => {
        e ? localStorage.setItem(suiteVars.userLoggedIn, "true") : localStorage.removeItem(suiteVars.userLoggedIn)
    };

    const pushToDataLayer = e => {
        window.dataLayer || (window.dataLayer = []);
        const t = {
            ...e,
            event_time: (new Date).toISOString(),
            marketing: {
                ...getCookiesFromStorage(),
                ...getMarketingParams(),
                ...e.marketing
            }
        };
        window.dataLayer.push(t)
    };

    const updateCartAttrs = async e => {
        await fetch("/cart/update.js", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                attributes: e
            })
        })
    };

    const cookieNames = ["_fbc", "_fbp", "_ga", "ttclid"];
    const marketingParams = ["utm_source", "utm_medium", "utm_campaign", "utm_content", "utm_term", "gclid", "utm_adset_id", "utm_ad_id", "utm_placement"];
    const marketingParams2 = [...marketingParams, "fbclid", "ttclid", "irclickid", "user_id"];
    const attrPrefix = "_datalayer_";
    const visitorInfoAttr = "_datalayer_visitor_info";

    const getSearchParams = () => {
        const e = new URLSearchParams(location.search);
        return Object.fromEntries(e.entries());
    };

    const formatCookies = e => Object.fromEntries(Object.entries(e).map((([e, t]) => {
        const r = e.includes("_ga_") && 7 === t?.split(".").length ? (e => e.split(".").slice(0, 5).join(".") + ".1." + e.split(".").slice(6).join("."))(t) : t;
        return [e, r]
    })));

    const cartReconcile = cartData => {
        const newCart = cartData.items,
            staleCart = getCart(),
            collectionPath = getLastCollectionPath();
        const addedItems = newCart.filter(e => !staleCart.some(t => t.variantId === e.variantId));
        const removedItems = staleCart.filter(e => !newCart.some(t => t.variantId === e.variantId));
        const qtyUpdates = staleCart.map((staleItem => {
            const matchingItem = newCart.find((t => t.variantId === staleItem.variantId));
            if (!matchingItem) return null;
            const newQty = Number(matchingItem.quantity),
                staleQty = Number(staleItem.quantity);
            if (newQty === staleQty) return null;
            if (newQty > staleQty) {
                const t = String(newQty - staleQty);
                return ["INCREASED", {
                    ...staleItem,
                    quantity: t
                }];
            } else {
                const t = String(staleQty - newQty);
                return ["DECREASED", {
                    ...staleItem,
                    quantity: t
                }]
            }
        })).filter((e => null !== e));
        const increasedItems = qtyUpdates.filter((([e, t]) => "INCREASED" === e)).map((([e, t]) => t));
        const decreasedItems = qtyUpdates.filter((([e, t]) => "DECREASED" === e)).map((([e, t]) => t));
        [...addedItems, ...increasedItems].forEach((t => {
            pushToDataLayer({
                event: "dl_add_to_cart",
                event_id: uuidv4(),
                ecommerce: {
                    currencyCode: cartData.currencyCode,
                    add: {
                        actionField: {
                            list: collectionPath
                        },
                        products: [{
                            id: t.id,
                            name: t.name,
                            brand: t.brand,
                            category: t.category,
                            variant: t.variant,
                            price: t.price,
                            quantity: t.quantity,
                            list: collectionPath,
                            product_id: t.productId,
                            variant_id: t.variantId,
                            ...t.compareAtPrice ? {
                                compare_at_price: t.compareAtPrice
                            } : {},
                            image: t.image
                        }]
                    }
                }
            });
        }));
        [...removedItems, ...decreasedItems].forEach((t => {
            pushToDataLayer({
                event: "dl_remove_from_cart",
                event_id: uuidv4(),
                ecommerce: {
                    currencyCode: cartData.currencyCode,
                    remove: {
                        actionField: {
                            list: t.list
                        },
                        products: [{
                            id: t.id,
                            name: t.name,
                            brand: t.brand,
                            category: t.category,
                            variant: t.variant,
                            price: t.price,
                            quantity: t.quantity,
                            list: t.list,
                            product_id: t.productId,
                            variant_id: t.variantId,
                            image: t.image
                        }]
                    }
                }
            });
        }));
        const d = [...staleCart.map((e => {
            const r = newCart.find((t => t.variantId === e.variantId));
            return r ? {
                ...e,
                quantity: r.quantity
            } : null
        })).filter((e => null !== e)), ...addedItems.map((e => ({
            ...e,
            list: collectionPath
        })))];
        storeCart(d);
        (addedItems.length > 0 || removedItems.length > 0 || qtyUpdates.length > 0) && pushToDataLayer({
            ecommerce: {
                cart_contents: {
                    products: d.map((e => ({
                        id: e.id,
                        name: e.name,
                        brand: e.brand,
                        category: e.category,
                        variant: e.variant,
                        price: e.price,
                        quantity: e.quantity,
                        list: e.list,
                        product_id: e.productId,
                        variant_id: e.variantId,
                        compare_at_price: e.compareAtPrice,
                        image: e.image
                    })))
                }
            }
        })
    };
    const cookieReconcile = async cartData => {
        const allNewCookies = formatCookies(Cookies.get());
        const newCookies = (e => {
            const t = Object.keys(e).find((e => e.includes("_ga_")));
            return t ? [...cookieNames, t] : cookieNames
        })(allNewCookies);
        const staleCookies = formatCookies(getCookiesFromStorage());
        const n = formatCookies(((e, t) => Object.fromEntries(Object.entries(t).filter((([t]) => e.includes(t.replace(attrPrefix, "")))).map((([e, t]) => [e.replace(attrPrefix, ""), t]))))(newCookies, cartData.attributes ?? {}));
        const missingCookies = newCookies.map((e => {
            const r = allNewCookies[e],
                a = staleCookies[e],
                o = n[e];
            return r !== a ? [e, r] : a !== o ? [e, a] : null
        })).filter((e => null !== e));
        if(missingCookies.length > 0) {
            const finalCookies = {
                ...staleCookies,
                ...Object.fromEntries(missingCookies)
            };
            localStorage.setItem(suiteVars.cookies, JSON.stringify(finalCookies));
            cartData.items.length > 0 && await updateCartAttrs(Object.fromEntries(missingCookies.map((([e, t]) => [`${attrPrefix}${e}`, t]))));
        }
    };
    const paramReconcile = async cartData => {
        const allParams = {
            ...getSearchParams(),
            user_id: getUserId()
        };
        const storedParams = getMarketingParams();
        const currentAttrValue = (cartAttrs => {
            const t = Object.entries(cartAttrs).find((([e]) => e === visitorInfoAttr));
            if (!t) return {};
            try {
                const e = t[1].replaceAll("&quot;", '"');
                return JSON.parse(e)
            } catch {
                return {}
            }
        })(cartData.attributes ?? {});
        const updatedParams = marketingParams2.map((e => {
            const n = allParams[e],
                a = storedParams[e],
                o = currentAttrValue[e];
            return n && n !== a ? [e, n] : a !== o ? [e, a] : null
        })).filter((e => null !== e));
        if (updatedParams.length > 0) {
            const finalParams = (({
                                      stale,
                                      updated
                                  }) => updated.some((([e]) => marketingParams.includes(e))) ? {
                ...Object.fromEntries(stale.filter((([e]) => !marketingParams.includes(e)))),
                ...Object.fromEntries(updated)
            } : {
                ...Object.fromEntries(stale),
                ...Object.fromEntries(updated)
            })({
                stale: Object.entries(storedParams),
                updated: updatedParams
            });
            localStorage.setItem(suiteVars.params, JSON.stringify(finalParams));
            cartData.items.length > 0 && await updateCartAttrs({
                [visitorInfoAttr]: JSON.stringify(finalParams)
            });
        }
    };
    const getCheckoutEventName = e => {
        switch (e) {
            case "contact_information":
                return "dl_begin_checkout";
            case "shipping_method":
                return "dl_add_shipping_info";
            case "payment_method":
                return "dl_add_payment_info"
        }
    };
    const getCheckoutStepNumber = e => {
        switch (e) {
            case "contact_information":
                return "1";
            case "shipping_method":
                return "2";
            case "payment_method":
                return "3"
        }
    };
    const prodHandlesOnPage = () => {
        const e = document.querySelectorAll('a[href*="/products/"]');
        return Array.from(e).map((e => new URL(e.href, location.origin).pathname.split("/").reverse()[0]))
    };


    function setParam(e, t, r) {
        t in e ? Object.defineProperty(e, t, {
            value: r,
            enumerable: true,
            configurable: true,
            writable: true
        }) : e[t] = r;
        return e;
    }
    const reconcileAll = async () => {
        const cartResp = await window.fetch("/cart.js");
        const cartJson = await cartResp.json();
        cartReconcile({
            currencyCode: cartJson.currency,
            items: cartJson.items.map(((e, t) => ({
                id: e.sku ?? String(e.id),
                name: e.product_title,
                brand: e.vendor,
                category: e.product_type,
                variant: e.variant_title,
                position: t,
                price: String(.01 * e.price),
                quantity: String(e.quantity),
                productId: String(e.product_id),
                variantId: String(e.id),
                image: e.featured_image?.url ?? null
            })))
        });
        const storedCart = getCart();
        cookieReconcile({
            attributes: cartJson.attributes,
            items: storedCart
        });
        paramReconcile({
            attributes: cartJson.attributes,
            items: storedCart
        });
    };
    const isCartRequest = ({ method: e, url: t}) => {
        const r = "POST" === e.toUpperCase(),
            i = t.toString().includes("/cart/add.js") || t.toString().includes("/cart/update.js") || t.toString().includes("/cart/change.js") || t.toString().includes("/cart/clear.js");
        return r && i
    };
    const b = window.fetch;
    const newFetch = async (...e) => {
        //console.log(e);
        const r = await b(...e);
        (async (e) => {
            const { method, url } = new Request(...e);
            if(isCartRequest({method, url})) {
                await reconcileAll();
            }
        })(e).catch(logger);
        return r;
    };

    class newXHR extends window.XMLHttpRequest {
        constructor() {
            super();
            setParam(this, "___SKVX_DATA_LAYER___method", null);
            setParam(this, "___SKVX_DATA_LAYER___url", null);
            this.addEventListener("readystatechange", () => {
                if (this.readyState === XMLHttpRequest.DONE) {
                    const thisMethod = this.___SKVX_DATA_LAYER___method,
                        thisUrl = this.___SKVX_DATA_LAYER___url;
                    if(thisMethod && thisUrl) {
                        (async ({method, url}) => {
                            if(isCartRequest({method, url})) {
                                await reconcileAll();
                            }
                        })({
                            method: thisMethod,
                            url: thisUrl
                        }).catch(logger)
                    }
                }
            });
        }
        open(...e) {
            const [t, r] = e;
            this.___SKVX_DATA_LAYER___method = t;
            this.___SKVX_DATA_LAYER___url = r;
            super.open(...e);
        }
    }

    const methods = {
        cartReconcile,
        cartView: cartData => {
            pushToDataLayer({
                event: "dl_view_cart",
                event_id: uuidv4(),
                cart_total: cartData.cartTotal,
                ecommerce: {
                    currencyCode: cartData.currencyCode,
                    actionField: {
                        list: "Shopping Cart"
                    },
                    impressions: cartData.items.map((item => ({
                        id: item.id,
                        name: item.name,
                        brand: item.brand,
                        category: item.category,
                        variant: item.variant,
                        price: item.price,
                        position: item.position,
                        product_id: item.productId,
                        variant_id: item.variantId,
                        quantity: item.quantity
                    })))
                }
            });
        },
        checkoutComplete: checkoutData => {
            const checkoutPage = window.Shopify?.Checkout?.page;
            if ("thank_you" === checkoutPage) {
                const cart = getCart();
                if(checkoutData.customer) {
                    pushToDataLayer({
                        event_id: uuidv4(),
                        user_properties: {
                            visitor_type: "logged_in",
                            customer_id: checkoutData.customer.id,
                            customer_email: checkoutData.customer.email,
                            customer_first_name: checkoutData.customer.firstName,
                            customer_last_name: checkoutData.customer.lastName,
                            customer_phone: checkoutData.customer.phone,
                            customer_city: checkoutData.customer.city,
                            customer_zip: checkoutData.customer.zip,
                            customer_address_1: checkoutData.customer.address1,
                            customer_address_2: checkoutData.customer.address2,
                            customer_country: checkoutData.customer.country,
                            customer_province: checkoutData.customer.province,
                            customer_province_code: checkoutData.customer.provinceCode,
                            customer_order_count: checkoutData.customer.orderCount,
                            customer_total_spent: checkoutData.customer.totalSpent,
                            customer_tags: checkoutData.customer.tags,
                            user_consent: "no"
                        }
                    });
                } else {
                    pushToDataLayer({
                        event_id: uuidv4(),
                        user_properties: {
                            visitor_type: "guest",
                            user_consent: "yes"
                        }
                    });
                }
                pushToDataLayer({
                    event: "dl_purchase",
                    event_id: uuidv4(),
                    ecommerce: {
                        currencyCode: checkoutData.currencyCode,
                        purchase: {
                            actionField: {
                                id: checkoutData.actionField.id,
                                ...checkoutData.actionField.order_name ? {
                                    order_name: checkoutData.actionField.order_name
                                } : {},
                                revenue: checkoutData.actionField.revenue,
                                tax: checkoutData.actionField.tax,
                                shipping: checkoutData.actionField.shipping,
                                affiliation: checkoutData.actionField.affiliation,
                                ...checkoutData.actionField.coupon ? {
                                    coupon: checkoutData.actionField.coupon
                                } : {},
                                sub_total: checkoutData.actionField.subTotal,
                                discount_amount: checkoutData.actionField.discountAmount
                            },
                            products: checkoutData.items.map(((item, idx) => ({
                                id: item.id,
                                name: item.name,
                                brand: item.brand,
                                category: item.category,
                                variant: item.variant,
                                price: item.price,
                                quantity: item.quantity,
                                list: cart.find((t => t.variantId === item.variantId))?.list ?? "",
                                position: String(idx + 1),
                                product_id: item.productId,
                                variant_id: item.variantId,
                                image: item.image
                            })))
                        }
                    },
                    marketing: {
                        landing_site: checkoutData.landingSite
                    }
                });
                storeCart([]);
                pushToDataLayer({
                    ecommerce: {
                        cart_contents: {
                            products: []
                        }
                    }
                });
            }
        },
        checkoutStep: checkoutData => {
            const checkoutStep = window.Shopify?.Checkout?.step;
            if ("contact_information" === checkoutStep || "shipping_method" === checkoutStep || "payment_method" === checkoutStep) {
                const cart = getCart();
                pushToDataLayer({
                    event: getCheckoutEventName(checkoutStep),
                    event_id: uuidv4(),
                    ecommerce: {
                        currencyCode: checkoutData.currencyCode,
                        checkout: {
                            actionField: {
                                step: getCheckoutStepNumber(checkoutStep)
                            },
                            products: checkoutData.items.map((item => ({
                                id: item.id,
                                name: item.name,
                                brand: item.brand,
                                category: item.category,
                                variant: item.variant,
                                price: item.price,
                                quantity: item.quantity,
                                list: cart.find((t => t.variantId === item.variantId))?.list ?? "",
                                product_id: item.productId,
                                variant_id: item.variantId,
                                image: item.image
                            })))
                        }
                    }
                })
            }
        },
        collectionView: collectionData => {
            const t = prodHandlesOnPage(),
                pathname = location.pathname,
                fullList = Array.from(new Map(collectionData.items.map((e => [e.productId, e]))).values()).filter((e => t.includes(e.handle))),
                n = fullList.length / collectionData.items.length * 100 < 10;
            const finalList = n ? collectionData.items : fullList;
            storeLastCollectionPath(pathname);
            pushToDataLayer({
                event: "dl_view_item_list",
                event_id: uuidv4(),
                ecommerce: {
                    currencyCode: collectionData.currencyCode,
                    impressions: finalList.map((item => ({
                        id: item.id,
                        name: item.name,
                        brand: item.brand,
                        category: item.category,
                        price: item.price,
                        position: item.position,
                        list: pathname,
                        product_id: item.productId,
                        variant_id: item.variantId
                    })))
                }
            });
        },
        cookieReconcile,
        paramReconcile,
        productAddToCartAjax: () => {
            window.fetch = newFetch;
            window.XMLHttpRequest = newXHR;
        },
        productAddToCartForm: productData => {
            const submitHandler = formEl => {
                const cart = getCart();
                const selectedVariant = (t => {
                    const r = t.querySelector('select[name="id"]'),
                        i = t.querySelector('input[name="quantity"]');
                    return {
                        ...r ? productData.items.find((e => e.variantId === r.value)) ?? productData.items[0] : productData.items[0],
                        quantity: i?.value ?? "1"
                    }
                })(formEl);
                const collectionPath = getLastCollectionPath();
                pushToDataLayer({
                    event: "dl_add_to_cart",
                    event_id: uuidv4(),
                    ecommerce: {
                        currencyCode: productData.currencyCode,
                        add: {
                            actionField: {
                                list: collectionPath
                            },
                            products: [{
                                id: selectedVariant.item.id,
                                name: selectedVariant.item.name,
                                brand: selectedVariant.item.brand,
                                category: selectedVariant.item.category,
                                variant: selectedVariant.item.variant,
                                price: selectedVariant.item.price,
                                quantity: selectedVariant.item.quantity,
                                list: selectedVariant.item.list,
                                product_id: selectedVariant.item.productId,
                                variant_id: selectedVariant.item.variantId,
                                ...selectedVariant.item.compareAtPrice ? {
                                    compare_at_price: selectedVariant.item.compareAtPrice
                                } : {},
                                image: selectedVariant.item.image
                            }]
                        }
                    }
                });
                const a = [...cart.filter((item => item.variantId !== selectedVariant.variantId)), {
                    ...selectedVariant,
                    list: collectionPath
                }];
                storeCart(a);
                pushToDataLayer({
                    ecommerce: {
                        cart_contents: {
                            products: a.map((product => ({
                                id: product.id,
                                name: product.name,
                                brand: product.brand,
                                category: product.category,
                                variant: product.variant,
                                price: product.price,
                                quantity: product.quantity,
                                list: product.list,
                                product_id: product.productId,
                                variant_id: product.variantId,
                                compare_at_price: product.compareAtPrice,
                                image: product.image
                            })))
                        }
                    }
                });
                cookieReconcile({
                    attributes: productData.attributes,
                    items: a
                });
                paramReconcile({
                    attributes: productData.attributes,
                    items: a
                });
            };
            Array.from(document.querySelectorAll('form[action^="/cart/add"]')).forEach(formEl => {
                const btns = formEl.querySelectorAll('[name="add"]'),
                    i = () => submitHandler(formEl);
                btns.length > 0 ? btns.forEach(btn => btn.addEventListener("click", i)) : formEl.addEventListener("submit", i);
            });
        },
        productRemoveFromCart: cartData => {
            let btnsList = [];
            const setupHandler = () => {
                const removeBtns = Array.from(document.querySelectorAll('a[href*="quantity=0"]'));
                btnsList.forEach(([e, t]) => {
                    e.removeEventListener("click", t)
                });
                btnsList = removeBtns.map(t3 => {
                    return [t3, () => {
                        (url => {
                            const lineNumber = url.searchParams.get("line");
                            if (lineNumber) {
                                const t = Number(lineNumber) - 1,
                                    itemToRemove = cartData.items.find(e => e.position === t);
                                if (itemToRemove) {
                                    const cart = getCart(),
                                        selectedVariant = cart.find(e => e.variantId === itemToRemove.variantId);
                                    pushToDataLayer({
                                        event: "dl_remove_from_cart",
                                        event_id: uuidv4(),
                                        ecommerce: {
                                            currencyCode: cartData.currencyCode,
                                            remove: {
                                                actionField: {
                                                    list: selectedVariant?.list ?? ""
                                                },
                                                products: [{
                                                    id: itemToRemove.id,
                                                    name: itemToRemove.name,
                                                    brand: itemToRemove.brand,
                                                    category: itemToRemove.category,
                                                    variant: itemToRemove.variant,
                                                    price: itemToRemove.price,
                                                    quantity: itemToRemove.quantity,
                                                    list: selectedVariant?.list ?? "",
                                                    product_id: itemToRemove.productId,
                                                    variant_id: itemToRemove.variantId,
                                                    image: itemToRemove.image
                                                }]
                                            }
                                        }
                                    });
                                    const remainingCart = cart.filter(e => e.variantId !== itemToRemove.variantId);
                                    storeCart(remainingCart);
                                    pushToDataLayer({
                                        ecommerce: {
                                            cart_contents: {
                                                products: remainingCart.map(e => ({
                                                    id: e.id,
                                                    name: e.name,
                                                    brand: e.brand,
                                                    category: e.category,
                                                    variant: e.variant,
                                                    price: e.price,
                                                    quantity: e.quantity,
                                                    list: e.list,
                                                    product_id: e.productId,
                                                    variant_id: e.variantId,
                                                    compare_at_price: e.compareAtPrice,
                                                    image: e.image
                                                }))
                                            }
                                        }
                                    });
                                }
                            }
                        })(new URL(t3.href, location.origin));
                    }];
                });
                btnsList.forEach(([e, t]) => {
                    e.addEventListener("click", t)
                });
            };
            setupHandler();
            const formEl = document.querySelector('form[action="/cart"]');
            if (formEl) {
                new MutationObserver(setupHandler).observe(formEl, {
                    subtree: true,
                    childList: true
                });
            }
        },
        productSelect: productData => {
            document.querySelectorAll('a[href*="/products/"]').forEach((t => {
                t.addEventListener("click", (() => {
                    const url = new URL(t.href, location.origin),
                        prodHandle = url.pathname.split("/").reverse()[0],
                        selectedProd = productData.items.filter((e => e.handle === prodHandle));
                    if (selectedProd.length > 0) {
                        const selectedVariantId = url.searchParams.get("variant"),
                            selectedVariant = selectedProd.find((e => e.variantId === selectedVariantId)) ?? selectedProd[0];
                        pushToDataLayer({
                            event: "dl_select_item",
                            event_id: uuidv4(),
                            ecommerce: {
                                currencyCode: productData.currencyCode,
                                click: {
                                    actionField: {
                                        list: location.pathname
                                    },
                                    products: [{
                                        id: selectedVariant.id,
                                        name: selectedVariant.name,
                                        brand: selectedVariant.brand,
                                        category: selectedVariant.category,
                                        price: selectedVariant.price,
                                        position: selectedVariant.position,
                                        list: location.pathname,
                                        product_id: selectedVariant.productId,
                                        variant_id: selectedVariant.variantId
                                    }]
                                }
                            }
                        });
                    }
                }));
            }));
        },
        productView: productData => {
            let t = null;
            setInterval((() => {
                const selectedVar = (() => {
                    const t = document.querySelector('form[action^="/cart/add"] select[name="id"]');
                    if (t) {
                        const r = t.value;
                        return productData.items.find((e => e.variantId === r)) ?? productData.items[0]
                    }
                    return productData.items[0];
                })();
                if(selectedVar.variantId !== t) {
                    t = selectedVar.variantId;
                    pushToDataLayer({
                        event: "dl_view_item",
                        event_id: uuidv4(),
                        ecommerce: {
                            currencyCode: productData.currencyCode,
                            detail: {
                                actionField: {
                                    list: getLastCollectionPath()
                                },
                                products: [{
                                    id: selectedVar.id,
                                    name: selectedVar.name,
                                    brand: selectedVar.brand,
                                    category: selectedVar.category,
                                    variant: selectedVar.variant,
                                    price: selectedVar.price,
                                    list: getLastCollectionPath(),
                                    product_id: selectedVar.productId,
                                    variant_id: selectedVar.variantId,
                                    compare_at_price: selectedVar.compareAtPrice,
                                    image: selectedVar.image,
                                    inventory: selectedVar.inventory
                                }]
                            }
                        }
                    });
                }
            }), 500)
        },
        searchResultsView: searchData => {
            const shownProds = prodHandlesOnPage(),
                pathname = location.pathname,
                items = Array.from(new Map(searchData.items.map((e => [e.productId, e]))).values()).filter((e => shownProds.includes(e.handle)));
            storeLastCollectionPath(pathname);
            pushToDataLayer({
                event: "dl_view_search_results",
                event_id: uuidv4(),
                ecommerce: {
                    currencyCode: searchData.currencyCode,
                    actionField: {
                        list: "search results"
                    },
                    impressions: items.map((item => ({
                        id: item.id,
                        name: item.name,
                        brand: item.brand,
                        category: item.category,
                        price: item.price,
                        position: item.position,
                        list: pathname,
                        product_id: item.productId,
                        variant_id: item.variantId
                    })))
                }
            });
        },
        user: userData => {
            const url = new URL(location.href),
                userConsent = window.Shopify?.customerPrivacy?.getTrackingConsent() ?? "",
                userId = getUserId(),
                cart = getCart();
            if (userData.customer) {
                if(getSignupPath() && "/" === url.pathname)  {
                    pushToDataLayer({
                        event: "dl_sign_up",
                        event_id: uuidv4(),
                        user_properties: {
                            visitor_type: "logged_in",
                            customer_id: userData.customer.id,
                            customer_email: userData.customer.email,
                            customer_order_count: userData.customer.orderCount,
                            customer_total_spent: userData.customer.totalSpent,
                            user_consent: userConsent
                        }
                    });
                }
                storeSignupPath(false);
                if(!getLoggedInStatus()) {
                    storeLoggedInStatus(true);
                    pushToDataLayer({
                        event: "dl_login",
                        event_id: uuidv4(),
                        user_properties: {
                            visitor_type: "logged_in",
                            customer_id: userData.customer.id,
                            customer_email: userData.customer.email,
                            customer_order_count: userData.customer.orderCount,
                            customer_total_spent: userData.customer.totalSpent
                        }
                    });
                }
                pushToDataLayer({
                    event: "dl_user_data",
                    event_id: uuidv4(),
                    cart_total: userData.cartTotal,
                    user_properties: {
                        visitor_type: "logged_in",
                        customer_id: userData.customer.id,
                        customer_email: userData.customer.email,
                        customer_first_name: userData.customer.firstName,
                        customer_last_name: userData.customer.lastName,
                        customer_phone: userData.customer.phone,
                        customer_city: userData.customer.city,
                        customer_zip: userData.customer.zip,
                        customer_address_1: userData.customer.address1,
                        customer_address_2: userData.customer.address2,
                        customer_country: userData.customer.country,
                        customer_province: userData.customer.province,
                        customer_province_code: userData.customer.provinceCode,
                        customer_order_count: userData.customer.orderCount,
                        customer_total_spent: userData.customer.totalSpent,
                        customer_tags: userData.customer.tags,
                        user_consent: userConsent
                    },
                    ecommerce: {
                        currencyCode: userData.currencyCode,
                        cart_contents: {
                            products: cart.map((e => ({
                                id: e.id,
                                name: e.name,
                                brand: e.brand,
                                category: e.category,
                                variant: e.variant,
                                price: e.price,
                                quantity: e.quantity,
                                list: e.list,
                                product_id: e.productId,
                                variant_id: e.variantId,
                                compare_at_price: e.compareAtPrice,
                                image: e.image
                            })))
                        }
                    }
                });
            } else {
                getLoggedInStatus() && storeLoggedInStatus(false);
                "/account/register" === url.pathname ? storeSignupPath(true) : "/challenge" !== url.pathname && storeSignupPath(false);
                pushToDataLayer({
                    event: "dl_user_data",
                    event_id: uuidv4(),
                    cart_total: userData.cartTotal,
                    user_properties: {
                        visitor_type: "guest",
                        user_consent: userConsent,
                        user_id: userId
                    },
                    ecommerce: {
                        currencyCode: userData.currencyCode,
                        cart_contents: {
                            products: cart.map(line => ({
                                id: line.id,
                                name: line.name,
                                brand: line.brand,
                                category: line.category,
                                variant: line.variant,
                                price: line.price,
                                quantity: line.quantity,
                                list: line.list,
                                product_id: line.productId,
                                variant_id: line.variantId,
                                compare_at_price: line.compareAtPrice,
                                image: line.image
                            }))
                        }
                    }
                });
            }
        }
    };

    window.SkVxGtmSuite = {
        handlers: {
            cartReconcile: tcWrapper(methods.cartReconcile),
            cartView: tcWrapper(methods.cartView),
            checkoutComplete: tcWrapper(methods.checkoutComplete),
            checkoutStep: tcWrapper(methods.checkoutStep),
            collectionView: tcWrapper(methods.collectionView),
            cookieReconcile: asyncTcWrapper(methods.cookieReconcile),
            paramReconcile: asyncTcWrapper(methods.paramReconcile),
            productAddToCartAjax: tcWrapper(methods.productAddToCartAjax),
            productAddToCartForm: tcWrapper(methods.productAddToCartForm),
            productRemoveFromCart: tcWrapper(methods.productRemoveFromCart),
            productSelect: tcWrapper(methods.productSelect),
            productView: tcWrapper(methods.productView),
            searchResultsView: tcWrapper(methods.searchResultsView),
            user: tcWrapper(methods.user)
        },
        utils: {
            pushToDataLayer: tcWrapper(pushToDataLayer)
        },
    };
}();
