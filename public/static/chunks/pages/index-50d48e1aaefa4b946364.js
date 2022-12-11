_N_E = (window.webpackJsonp_N_E = window.webpackJsonp_N_E || []).push([
    [20],
    {
        "B3/I": function (e, t, n) {
            "use strict";
            var r =
                    (this && this.__extends) ||
                    (function () {
                        var e =
                            Object.setPrototypeOf ||
                            ({ __proto__: [] } instanceof Array &&
                                function (e, t) {
                                    e.__proto__ = t;
                                }) ||
                            function (e, t) {
                                for (var n in t)
                                    t.hasOwnProperty(n) && (e[n] = t[n]);
                            };
                        return function (t, n) {
                            function r() {
                                this.constructor = t;
                            }
                            e(t, n),
                                (t.prototype =
                                    null === n
                                        ? Object.create(n)
                                        : ((r.prototype = n.prototype),
                                          new r()));
                        };
                    })(),
                a =
                    (this && this.__assign) ||
                    Object.assign ||
                    function (e) {
                        for (var t, n = 1, r = arguments.length; n < r; n++)
                            for (var a in (t = arguments[n]))
                                Object.prototype.hasOwnProperty.call(t, a) &&
                                    (e[a] = t[a]);
                        return e;
                    },
                i =
                    (this && this.__rest) ||
                    function (e, t) {
                        var n = {};
                        for (var r in e)
                            Object.prototype.hasOwnProperty.call(e, r) &&
                                t.indexOf(r) < 0 &&
                                (n[r] = e[r]);
                        if (
                            null != e &&
                            "function" === typeof Object.getOwnPropertySymbols
                        ) {
                            var a = 0;
                            for (
                                r = Object.getOwnPropertySymbols(e);
                                a < r.length;
                                a++
                            )
                                t.indexOf(r[a]) < 0 && (n[r[a]] = e[r[a]]);
                        }
                        return n;
                    },
                s =
                    (this && this.__importStar) ||
                    function (e) {
                        if (e && e.__esModule) return e;
                        var t = {};
                        if (null != e)
                            for (var n in e)
                                Object.hasOwnProperty.call(e, n) &&
                                    (t[n] = e[n]);
                        return (t.default = e), t;
                    };
            Object.defineProperty(t, "__esModule", { value: !0 });
            var o = s(n("q1tI")),
                c = {
                    start: [
                        "animationstart",
                        "webkitAnimationStart",
                        "mozAnimationStart",
                        "oanimationstart",
                        "MSAnimationStart",
                    ],
                    end: [
                        "animationend",
                        "webkitAnimationEnd",
                        "mozAnimationEnd",
                        "oanimationend",
                        "MSAnimationEnd",
                    ],
                    startRemoved: [],
                    endRemoved: [],
                },
                l = (function (e) {
                    function t(t) {
                        var n = e.call(this, t) || this;
                        return (
                            (n.state = {
                                animating: !1,
                                clearAnimationClass: !1,
                            }),
                            (n.animationStart = n.animationStart.bind(n)),
                            (n.animationEnd = n.animationEnd.bind(n)),
                            (n.setElementRef = function (e) {
                                n.elm = e;
                            }),
                            n
                        );
                    }
                    return (
                        r(t, e),
                        (t.prototype.componentDidMount = function () {
                            this.addEventListener(
                                "start",
                                this.elm,
                                this.animationStart
                            ),
                                this.addEventListener(
                                    "end",
                                    this.elm,
                                    this.animationEnd
                                );
                        }),
                        (t.prototype.componentWillUnmount = function () {
                            this.removeEventListeners(
                                "start",
                                this.elm,
                                this.animationStart
                            ),
                                this.removeEventListeners(
                                    "end",
                                    this.elm,
                                    this.animationEnd
                                );
                        }),
                        (t.prototype.addEventListener = function (e, t, n) {
                            c[e].map(function (e) {
                                t.addEventListener(e, n);
                            });
                        }),
                        (t.prototype.removeEventListeners = function (e, t, n) {
                            c[e].map(function (e) {
                                t.removeEventListener(e, n);
                            });
                        }),
                        (t.prototype.updateEvents = function (e, t) {
                            (c[e + "Removed"] = c[e].filter(function (e) {
                                return e !== t;
                            })),
                                (c[e] = [t]);
                        }),
                        (t.prototype.animationStart = function (e) {
                            c.start.length > 1 &&
                                (this.updateEvents("start", e.type),
                                this.removeEventListeners(
                                    "startRemoved",
                                    this.elm,
                                    this.animationStart
                                )),
                                this.setState({
                                    animating: !0,
                                    clearAnimationClass: !1,
                                });
                        }),
                        (t.prototype.animationEnd = function (e) {
                            c.end.length > 1 &&
                                (this.updateEvents("end", e.type),
                                this.removeEventListeners(
                                    "endRemoved",
                                    this.elm,
                                    this.animationStart
                                )),
                                this.setState({ clearAnimationClass: !0 }),
                                this.setState({
                                    animating: !1,
                                    clearAnimationClass: !1,
                                }),
                                "function" ===
                                    typeof this.props.onAnimationEnd &&
                                    this.props.onAnimationEnd();
                        }),
                        (t.prototype.shouldComponentUpdate = function (e, t) {
                            return this.state.animating === t.animating;
                        }),
                        (t.prototype.render = function () {
                            var e = this.state.clearAnimationClass,
                                t = this.props,
                                n = t.baseClassName,
                                r = t.animate,
                                s = t.animationClassName,
                                c = t.customTag,
                                l = t.children,
                                d =
                                    (t.onAnimationEnd,
                                    i(t, [
                                        "baseClassName",
                                        "animate",
                                        "animationClassName",
                                        "customTag",
                                        "children",
                                        "onAnimationEnd",
                                    ])),
                                u = n;
                            r && !e && (u += " " + s);
                            var h = c || "span";
                            return o.default.createElement(
                                h,
                                a({ ref: this.setElementRef, className: u }, d),
                                l
                            );
                        }),
                        t
                    );
                })(o.Component);
            t.default = l;
        },
        RNiq: function (e, t, n) {
            "use strict";
            n.r(t),
                n.d(t, "__N_SSG", function () {
                    return et;
                }),
                n.d(t, "default", function () {
                    return tt;
                });
            var r = n("nKUr"),
                a = n("rePB"),
                i = n("YFqc"),
                s = n.n(i),
                o = n("nOHt"),
                c = n("q1tI"),
                l = n.n(c);
            function d() {
                return (d =
                    Object.assign ||
                    function (e) {
                        for (var t = 1; t < arguments.length; t++) {
                            var n = arguments[t];
                            for (var r in n)
                                Object.prototype.hasOwnProperty.call(n, r) &&
                                    (e[r] = n[r]);
                        }
                        return e;
                    }).apply(this, arguments);
            }
            function u(e, t) {
                if (null == e) return {};
                var n,
                    r,
                    a = {},
                    i = Object.keys(e);
                for (r = 0; r < i.length; r++)
                    (n = i[r]), t.indexOf(n) >= 0 || (a[n] = e[n]);
                return a;
            }
            const h = {
                arr: Array.isArray,
                obj: (e) =>
                    "[object Object]" === Object.prototype.toString.call(e),
                fun: (e) => "function" === typeof e,
                str: (e) => "string" === typeof e,
                num: (e) => "number" === typeof e,
                und: (e) => void 0 === e,
                nul: (e) => null === e,
                set: (e) => e instanceof Set,
                map: (e) => e instanceof Map,
                equ(e, t) {
                    if (typeof e !== typeof t) return !1;
                    if (h.str(e) || h.num(e)) return e === t;
                    if (
                        h.obj(e) &&
                        h.obj(t) &&
                        Object.keys(e).length + Object.keys(t).length === 0
                    )
                        return !0;
                    let n;
                    for (n in e) if (!(n in t)) return !1;
                    for (n in t) if (e[n] !== t[n]) return !1;
                    return !h.und(n) || e === t;
                },
            };
            function m() {
                const e = Object(c.useState)(!1)[1];
                return Object(c.useCallback)(() => e((e) => !e), []);
            }
            function f(e, t) {
                return h.und(e) || h.nul(e) ? t : e;
            }
            function p(e) {
                return h.und(e) ? [] : h.arr(e) ? e : [e];
            }
            function b(e) {
                for (
                    var t = arguments.length,
                        n = new Array(t > 1 ? t - 1 : 0),
                        r = 1;
                    r < t;
                    r++
                )
                    n[r - 1] = arguments[r];
                return h.fun(e) ? e(...n) : e;
            }
            function j(e) {
                const t = (function (e) {
                    return (
                        e.to,
                        e.from,
                        e.config,
                        e.onStart,
                        e.onRest,
                        e.onFrame,
                        e.children,
                        e.reset,
                        e.reverse,
                        e.force,
                        e.immediate,
                        e.delay,
                        e.attach,
                        e.destroyed,
                        e.interpolateTo,
                        e.ref,
                        e.lazy,
                        u(e, [
                            "to",
                            "from",
                            "config",
                            "onStart",
                            "onRest",
                            "onFrame",
                            "children",
                            "reset",
                            "reverse",
                            "force",
                            "immediate",
                            "delay",
                            "attach",
                            "destroyed",
                            "interpolateTo",
                            "ref",
                            "lazy",
                        ])
                    );
                })(e);
                if (h.und(t)) return d({ to: t }, e);
                const n = Object.keys(e).reduce(
                    (n, r) => (h.und(t[r]) ? d({}, n, { [r]: e[r] }) : n),
                    {}
                );
                return d({ to: t }, n);
            }
            class g {
                constructor() {
                    (this.payload = void 0), (this.children = []);
                }
                getAnimatedValue() {
                    return this.getValue();
                }
                getPayload() {
                    return this.payload || this;
                }
                attach() {}
                detach() {}
                getChildren() {
                    return this.children;
                }
                addChild(e) {
                    0 === this.children.length && this.attach(),
                        this.children.push(e);
                }
                removeChild(e) {
                    const t = this.children.indexOf(e);
                    this.children.splice(t, 1),
                        0 === this.children.length && this.detach();
                }
            }
            class v extends g {
                constructor() {
                    super(...arguments),
                        (this.payload = []),
                        (this.attach = () =>
                            this.payload.forEach(
                                (e) => e instanceof g && e.addChild(this)
                            )),
                        (this.detach = () =>
                            this.payload.forEach(
                                (e) => e instanceof g && e.removeChild(this)
                            ));
                }
            }
            class O extends g {
                constructor() {
                    super(...arguments),
                        (this.payload = {}),
                        (this.attach = () =>
                            Object.values(this.payload).forEach(
                                (e) => e instanceof g && e.addChild(this)
                            )),
                        (this.detach = () =>
                            Object.values(this.payload).forEach(
                                (e) => e instanceof g && e.removeChild(this)
                            ));
                }
                getValue(e) {
                    void 0 === e && (e = !1);
                    const t = {};
                    for (const n in this.payload) {
                        const r = this.payload[n];
                        (!e || r instanceof g) &&
                            (t[n] =
                                r instanceof g
                                    ? r[e ? "getAnimatedValue" : "getValue"]()
                                    : r);
                    }
                    return t;
                }
                getAnimatedValue() {
                    return this.getValue(!0);
                }
            }
            let y, x;
            function w(e, t) {
                y = { fn: e, transform: t };
            }
            function k(e) {
                x = e;
            }
            let N,
                S = (e) =>
                    "undefined" !== typeof window
                        ? window.requestAnimationFrame(e)
                        : -1;
            function E(e) {
                N = e;
            }
            let _,
                P = () => Date.now();
            function C(e) {
                _ = e;
            }
            let A,
                V,
                T = (e) => e.current;
            function F(e) {
                A = e;
            }
            class R extends O {
                constructor(e, t) {
                    super(),
                        (this.update = void 0),
                        (this.payload = e.style
                            ? d({}, e, { style: A(e.style) })
                            : e),
                        (this.update = t),
                        this.attach();
                }
            }
            let M = !1;
            const q = new Set(),
                I = () => {
                    if (!M) return !1;
                    let e = P();
                    for (let t of q) {
                        let n = !1;
                        for (let r = 0; r < t.configs.length; r++) {
                            let a,
                                i,
                                s = t.configs[r];
                            for (let t = 0; t < s.animatedValues.length; t++) {
                                let r = s.animatedValues[t];
                                if (r.done) continue;
                                let o = s.fromValues[t],
                                    c = s.toValues[t],
                                    l = r.lastPosition,
                                    d = c instanceof g,
                                    u = Array.isArray(s.initialVelocity)
                                        ? s.initialVelocity[t]
                                        : s.initialVelocity;
                                if ((d && (c = c.getValue()), s.immediate))
                                    r.setValue(c), (r.done = !0);
                                else if (
                                    "string" !== typeof o &&
                                    "string" !== typeof c
                                ) {
                                    if (void 0 !== s.duration)
                                        (l =
                                            o +
                                            s.easing(
                                                (e - r.startTime) / s.duration
                                            ) *
                                                (c - o)),
                                            (a = e >= r.startTime + s.duration);
                                    else if (s.decay)
                                        (l =
                                            o +
                                            (u / (1 - 0.998)) *
                                                (1 -
                                                    Math.exp(
                                                        -(1 - 0.998) *
                                                            (e - r.startTime)
                                                    ))),
                                            (a =
                                                Math.abs(r.lastPosition - l) <
                                                0.1),
                                            a && (c = l);
                                    else {
                                        (i =
                                            void 0 !== r.lastTime
                                                ? r.lastTime
                                                : e),
                                            (u =
                                                void 0 !== r.lastVelocity
                                                    ? r.lastVelocity
                                                    : s.initialVelocity),
                                            e > i + 64 && (i = e);
                                        let t = Math.floor(e - i);
                                        for (let e = 0; e < t; ++e) {
                                            (u +=
                                                (1 *
                                                    ((-s.tension * (l - c) +
                                                        -s.friction * u) /
                                                        s.mass)) /
                                                1e3),
                                                (l += (1 * u) / 1e3);
                                        }
                                        let n =
                                                !(
                                                    !s.clamp || 0 === s.tension
                                                ) && (o < c ? l > c : l < c),
                                            d = Math.abs(u) <= s.precision,
                                            h =
                                                0 === s.tension ||
                                                Math.abs(c - l) <= s.precision;
                                        (a = n || (d && h)),
                                            (r.lastVelocity = u),
                                            (r.lastTime = e);
                                    }
                                    d && !s.toValues[t].done && (a = !1),
                                        a
                                            ? (r.value !== c && (l = c),
                                              (r.done = !0))
                                            : (n = !0),
                                        r.setValue(l),
                                        (r.lastPosition = l);
                                } else r.setValue(c), (r.done = !0);
                            }
                            t.props.onFrame &&
                                (t.values[s.name] = s.interpolation.getValue());
                        }
                        t.props.onFrame && t.props.onFrame(t.values),
                            n || (q.delete(t), t.stop(!0));
                    }
                    return q.size ? (V ? V() : S(I)) : (M = !1), M;
                };
            function L(e, t, n) {
                if ("function" === typeof e) return e;
                if (Array.isArray(e))
                    return L({ range: e, output: t, extrapolate: n });
                if (N && "string" === typeof e.output[0]) return N(e);
                const r = e,
                    a = r.output,
                    i = r.range || [0, 1],
                    s = r.extrapolateLeft || r.extrapolate || "extend",
                    o = r.extrapolateRight || r.extrapolate || "extend",
                    c = r.easing || ((e) => e);
                return (e) => {
                    const t = (function (e, t) {
                        for (var n = 1; n < t.length - 1 && !(t[n] >= e); ++n);
                        return n - 1;
                    })(e, i);
                    return (function (e, t, n, r, a, i, s, o, c) {
                        let l = c ? c(e) : e;
                        if (l < t) {
                            if ("identity" === s) return l;
                            "clamp" === s && (l = t);
                        }
                        if (l > n) {
                            if ("identity" === o) return l;
                            "clamp" === o && (l = n);
                        }
                        if (r === a) return r;
                        if (t === n) return e <= t ? r : a;
                        t === -1 / 0
                            ? (l = -l)
                            : n === 1 / 0
                            ? (l -= t)
                            : (l = (l - t) / (n - t));
                        (l = i(l)),
                            r === -1 / 0
                                ? (l = -l)
                                : a === 1 / 0
                                ? (l += r)
                                : (l = l * (a - r) + r);
                        return l;
                    })(e, i[t], i[t + 1], a[t], a[t + 1], c, s, o, r.map);
                };
            }
            class D extends v {
                constructor(e, t, n, r) {
                    super(),
                        (this.calc = void 0),
                        (this.payload =
                            e instanceof v && !(e instanceof D)
                                ? e.getPayload()
                                : Array.isArray(e)
                                ? e
                                : [e]),
                        (this.calc = L(t, n, r));
                }
                getValue() {
                    return this.calc(...this.payload.map((e) => e.getValue()));
                }
                updateConfig(e, t, n) {
                    this.calc = L(e, t, n);
                }
                interpolate(e, t, n) {
                    return new D(this, e, t, n);
                }
            }
            const z = {
                default: { tension: 170, friction: 26 },
                gentle: { tension: 120, friction: 14 },
                wobbly: { tension: 180, friction: 12 },
                stiff: { tension: 210, friction: 20 },
                slow: { tension: 280, friction: 60 },
                molasses: { tension: 280, friction: 120 },
            };
            class H extends g {
                constructor(e) {
                    var t;
                    super(),
                        (t = this),
                        (this.animatedStyles = new Set()),
                        (this.value = void 0),
                        (this.startPosition = void 0),
                        (this.lastPosition = void 0),
                        (this.lastVelocity = void 0),
                        (this.startTime = void 0),
                        (this.lastTime = void 0),
                        (this.done = !1),
                        (this.setValue = function (e, n) {
                            void 0 === n && (n = !0),
                                (t.value = e),
                                n && t.flush();
                        }),
                        (this.value = e),
                        (this.startPosition = e),
                        (this.lastPosition = e);
                }
                flush() {
                    0 === this.animatedStyles.size &&
                        (function e(t, n) {
                            "update" in t
                                ? n.add(t)
                                : t.getChildren().forEach((t) => e(t, n));
                        })(this, this.animatedStyles),
                        this.animatedStyles.forEach((e) => e.update());
                }
                clearStyles() {
                    this.animatedStyles.clear();
                }
                getValue() {
                    return this.value;
                }
                interpolate(e, t, n) {
                    return new D(this, e, t, n);
                }
            }
            class $ extends v {
                constructor(e) {
                    super(), (this.payload = e.map((e) => new H(e)));
                }
                setValue(e, t) {
                    void 0 === t && (t = !0),
                        Array.isArray(e)
                            ? e.length === this.payload.length &&
                              e.forEach((e, n) =>
                                  this.payload[n].setValue(e, t)
                              )
                            : this.payload.forEach((n) => n.setValue(e, t));
                }
                getValue() {
                    return this.payload.map((e) => e.getValue());
                }
                interpolate(e, t) {
                    return new D(this, e, t);
                }
            }
            let G = 0;
            class K {
                constructor() {
                    (this.id = void 0),
                        (this.idle = !0),
                        (this.hasChanged = !1),
                        (this.guid = 0),
                        (this.local = 0),
                        (this.props = {}),
                        (this.merged = {}),
                        (this.animations = {}),
                        (this.interpolations = {}),
                        (this.values = {}),
                        (this.configs = []),
                        (this.listeners = []),
                        (this.queue = []),
                        (this.localQueue = void 0),
                        (this.getValues = () => this.interpolations),
                        (this.id = G++);
                }
                update(e) {
                    if (!e) return this;
                    const t = j(e),
                        n = t.delay,
                        r = void 0 === n ? 0 : n,
                        a = t.to,
                        i = u(t, ["delay", "to"]);
                    if (h.arr(a) || h.fun(a))
                        this.queue.push(d({}, i, { delay: r, to: a }));
                    else if (a) {
                        let e = {};
                        Object.entries(a).forEach((t) => {
                            let n = t[0];
                            const a = d(
                                    { to: { [n]: t[1] }, delay: b(r, n) },
                                    i
                                ),
                                s = e[a.delay] && e[a.delay].to;
                            e[a.delay] = d({}, e[a.delay], a, {
                                to: d({}, s, a.to),
                            });
                        }),
                            (this.queue = Object.values(e));
                    }
                    return (
                        (this.queue = this.queue.sort(
                            (e, t) => e.delay - t.delay
                        )),
                        this.diff(i),
                        this
                    );
                }
                start(e) {
                    if (this.queue.length) {
                        (this.idle = !1),
                            this.localQueue &&
                                this.localQueue.forEach((e) => {
                                    let t = e.from,
                                        n = void 0 === t ? {} : t,
                                        r = e.to,
                                        a = void 0 === r ? {} : r;
                                    h.obj(n) &&
                                        (this.merged = d({}, n, this.merged)),
                                        h.obj(a) &&
                                            (this.merged = d(
                                                {},
                                                this.merged,
                                                a
                                            ));
                                });
                        const t = (this.local = ++this.guid),
                            n = (this.localQueue = this.queue);
                        (this.queue = []),
                            n.forEach((r, a) => {
                                let i = r.delay,
                                    s = u(r, ["delay"]);
                                const o = (r) => {
                                    a === n.length - 1 &&
                                        t === this.guid &&
                                        r &&
                                        ((this.idle = !0),
                                        this.props.onRest &&
                                            this.props.onRest(this.merged)),
                                        e && e();
                                };
                                let c = h.arr(s.to) || h.fun(s.to);
                                i
                                    ? setTimeout(() => {
                                          t === this.guid &&
                                              (c
                                                  ? this.runAsync(s, o)
                                                  : this.diff(s).start(o));
                                      }, i)
                                    : c
                                    ? this.runAsync(s, o)
                                    : this.diff(s).start(o);
                            });
                    } else
                        h.fun(e) && this.listeners.push(e),
                            this.props.onStart && this.props.onStart(),
                            (t = this),
                            q.has(t) || q.add(t),
                            M || ((M = !0), S(V || I));
                    var t;
                    return this;
                }
                stop(e) {
                    return (
                        this.listeners.forEach((t) => t(e)),
                        (this.listeners = []),
                        this
                    );
                }
                pause(e) {
                    var t;
                    return (
                        this.stop(!0),
                        e && ((t = this), q.has(t) && q.delete(t)),
                        this
                    );
                }
                runAsync(e, t) {
                    var n = this;
                    e.delay;
                    let r = u(e, ["delay"]);
                    const a = this.local;
                    let i = Promise.resolve(void 0);
                    if (h.arr(r.to))
                        for (let s = 0; s < r.to.length; s++) {
                            const e = s,
                                t = d({}, r, j(r.to[e]));
                            h.arr(t.config) && (t.config = t.config[e]),
                                (i = i.then(() => {
                                    if (a === this.guid)
                                        return new Promise((e) =>
                                            this.diff(t).start(e)
                                        );
                                }));
                        }
                    else if (h.fun(r.to)) {
                        let e,
                            t = 0;
                        i = i.then(() =>
                            r
                                .to(
                                    (n) => {
                                        const i = d({}, r, j(n));
                                        if (
                                            (h.arr(i.config) &&
                                                (i.config = i.config[t]),
                                            t++,
                                            a === this.guid)
                                        )
                                            return (e = new Promise((e) =>
                                                this.diff(i).start(e)
                                            ));
                                    },
                                    function (e) {
                                        return (
                                            void 0 === e && (e = !0), n.stop(e)
                                        );
                                    }
                                )
                                .then(() => e)
                        );
                    }
                    i.then(t);
                }
                diff(e) {
                    this.props = d({}, this.props, e);
                    let t = this.props,
                        n = t.from,
                        r = void 0 === n ? {} : n,
                        a = t.to,
                        i = void 0 === a ? {} : a,
                        s = t.config,
                        o = void 0 === s ? {} : s,
                        c = t.reverse,
                        l = t.attach,
                        u = t.reset,
                        m = t.immediate;
                    if (c) {
                        var j = [i, r];
                        (r = j[0]), (i = j[1]);
                    }
                    (this.merged = d({}, r, this.merged, i)),
                        (this.hasChanged = !1);
                    let g = l && l(this);
                    if (
                        ((this.animations = Object.entries(this.merged).reduce(
                            (e, t) => {
                                let n = t[0],
                                    a = t[1],
                                    i = e[n] || {};
                                const s = h.num(a),
                                    c =
                                        h.str(a) &&
                                        !a.startsWith("#") &&
                                        !/\d/.test(a) &&
                                        !x[a],
                                    l = h.arr(a),
                                    j = !s && !l && !c;
                                let v = h.und(r[n]) ? a : r[n],
                                    O = s || l || c ? a : 1,
                                    y = b(o, n);
                                g && (O = g.animations[n].parent);
                                let w,
                                    k = i.parent,
                                    S = i.interpolation,
                                    E = p(g ? O.getPayload() : O),
                                    _ = a;
                                j &&
                                    (_ = N({ range: [0, 1], output: [a, a] })(
                                        1
                                    ));
                                let C = S && S.getValue();
                                const A =
                                        !h.und(k) &&
                                        i.animatedValues.some((e) => !e.done),
                                    V = !h.equ(_, C),
                                    T = !h.equ(_, i.previous),
                                    F = !h.equ(y, i.config);
                                if (u || (T && V) || F) {
                                    if (s || c) k = S = i.parent || new H(v);
                                    else if (l) k = S = i.parent || new $(v);
                                    else if (j) {
                                        let e =
                                            i.interpolation &&
                                            i.interpolation.calc(
                                                i.parent.value
                                            );
                                        (e = void 0 === e || u ? v : e),
                                            i.parent
                                                ? ((k = i.parent),
                                                  k.setValue(0, !1))
                                                : (k = new H(0));
                                        const t = { output: [e, a] };
                                        i.interpolation
                                            ? ((S = i.interpolation),
                                              i.interpolation.updateConfig(t))
                                            : (S = k.interpolate(t));
                                    }
                                    return (
                                        (E = p(g ? O.getPayload() : O)),
                                        (w = p(k.getPayload())),
                                        u && !j && k.setValue(v, !1),
                                        (this.hasChanged = !0),
                                        w.forEach((e) => {
                                            (e.startPosition = e.value),
                                                (e.lastPosition = e.value),
                                                (e.lastVelocity = A
                                                    ? e.lastVelocity
                                                    : void 0),
                                                (e.lastTime = A
                                                    ? e.lastTime
                                                    : void 0),
                                                (e.startTime = P()),
                                                (e.done = !1),
                                                e.animatedStyles.clear();
                                        }),
                                        b(m, n) && k.setValue(j ? O : a, !1),
                                        d({}, e, {
                                            [n]: d({}, i, {
                                                name: n,
                                                parent: k,
                                                interpolation: S,
                                                animatedValues: w,
                                                toValues: E,
                                                previous: _,
                                                config: y,
                                                fromValues: p(k.getValue()),
                                                immediate: b(m, n),
                                                initialVelocity: f(
                                                    y.velocity,
                                                    0
                                                ),
                                                clamp: f(y.clamp, !1),
                                                precision: f(y.precision, 0.01),
                                                tension: f(y.tension, 170),
                                                friction: f(y.friction, 26),
                                                mass: f(y.mass, 1),
                                                duration: y.duration,
                                                easing: f(y.easing, (e) => e),
                                                decay: y.decay,
                                            }),
                                        })
                                    );
                                }
                                return V
                                    ? e
                                    : (j &&
                                          (k.setValue(1, !1),
                                          S.updateConfig({ output: [_, _] })),
                                      (k.done = !0),
                                      (this.hasChanged = !0),
                                      d({}, e, {
                                          [n]: d({}, e[n], { previous: _ }),
                                      }));
                            },
                            this.animations
                        )),
                        this.hasChanged)
                    ) {
                        (this.configs = Object.values(this.animations)),
                            (this.values = {}),
                            (this.interpolations = {});
                        for (let e in this.animations)
                            (this.interpolations[e] =
                                this.animations[e].interpolation),
                                (this.values[e] =
                                    this.animations[
                                        e
                                    ].interpolation.getValue());
                    }
                    return this;
                }
                destroy() {
                    this.stop(),
                        (this.props = {}),
                        (this.merged = {}),
                        (this.animations = {}),
                        (this.interpolations = {}),
                        (this.values = {}),
                        (this.configs = []),
                        (this.local = 0);
                }
            }
            let W = 0;
            const J = (e, t) =>
                    ("function" === typeof t ? e.map(t) : p(t)).map(String),
                U = (e) => {
                    let t = e.items,
                        n = e.keys,
                        r = void 0 === n ? (e) => e : n,
                        a = u(e, ["items", "keys"]);
                    return (
                        (t = p(void 0 !== t ? t : null)),
                        d({ items: t, keys: J(t, r) }, a)
                    );
                };
            function B(e, t, n) {
                const r = d({ items: e, keys: t || ((e) => e) }, n),
                    a = U(r),
                    i = a.lazy,
                    s = void 0 !== i && i,
                    o = (a.unique, a.reset),
                    l = void 0 !== o && o,
                    h = (a.enter, a.leave, a.update, a.onDestroyed),
                    f = (a.keys, a.items, a.onFrame),
                    p = a.onRest,
                    j = a.onStart,
                    g = a.ref,
                    v = u(a, [
                        "lazy",
                        "unique",
                        "reset",
                        "enter",
                        "leave",
                        "update",
                        "onDestroyed",
                        "keys",
                        "items",
                        "onFrame",
                        "onRest",
                        "onStart",
                        "ref",
                    ]),
                    O = m(),
                    y = Object(c.useRef)(!1),
                    x = Object(c.useRef)({
                        mounted: !1,
                        first: !0,
                        deleted: [],
                        current: {},
                        transitions: [],
                        prevProps: {},
                        paused: !!r.ref,
                        instances: !y.current && new Map(),
                        forceUpdate: O,
                    });
                return (
                    Object(c.useImperativeHandle)(r.ref, () => ({
                        start: () =>
                            Promise.all(
                                Array.from(x.current.instances).map((e) => {
                                    let t = e[1];
                                    return new Promise((e) => t.start(e));
                                })
                            ),
                        stop: (e) =>
                            Array.from(x.current.instances).forEach((t) =>
                                t[1].stop(e)
                            ),
                        get controllers() {
                            return Array.from(x.current.instances).map(
                                (e) => e[1]
                            );
                        },
                    })),
                    (x.current = (function (e, t) {
                        let n = e.first,
                            r = e.prevProps,
                            a = u(e, ["first", "prevProps"]),
                            i = U(t),
                            s = i.items,
                            o = i.keys,
                            c = i.initial,
                            l = i.from,
                            h = i.enter,
                            m = i.leave,
                            f = i.update,
                            p = i.trail,
                            j = void 0 === p ? 0 : p,
                            g = i.unique,
                            v = i.config,
                            O = i.order,
                            y = void 0 === O ? ["enter", "leave", "update"] : O,
                            x = U(r),
                            w = x.keys,
                            k = x.items,
                            N = d({}, a.current),
                            S = [...a.deleted],
                            E = Object.keys(N),
                            _ = new Set(E),
                            P = new Set(o),
                            C = o.filter((e) => !_.has(e)),
                            A = a.transitions
                                .filter(
                                    (e) => !e.destroyed && !P.has(e.originalKey)
                                )
                                .map((e) => e.originalKey),
                            V = o.filter((e) => _.has(e)),
                            T = -j;
                        for (; y.length; ) {
                            switch (y.shift()) {
                                case "enter":
                                    C.forEach((e, t) => {
                                        g &&
                                            S.find(
                                                (t) => t.originalKey === e
                                            ) &&
                                            (S = S.filter(
                                                (t) => t.originalKey !== e
                                            ));
                                        const r = o.indexOf(e),
                                            a = s[r],
                                            i =
                                                n && void 0 !== c
                                                    ? "initial"
                                                    : "enter";
                                        N[e] = {
                                            slot: i,
                                            originalKey: e,
                                            key: g ? String(e) : W++,
                                            item: a,
                                            trail: (T += j),
                                            config: b(v, a, i),
                                            from: b(
                                                n && void 0 !== c ? c || {} : l,
                                                a
                                            ),
                                            to: b(h, a),
                                        };
                                    });
                                    break;
                                case "leave":
                                    A.forEach((e) => {
                                        const t = w.indexOf(e),
                                            n = k[t],
                                            r = "leave";
                                        S.unshift(
                                            d({}, N[e], {
                                                slot: r,
                                                destroyed: !0,
                                                left: w[Math.max(0, t - 1)],
                                                right: w[
                                                    Math.min(w.length, t + 1)
                                                ],
                                                trail: (T += j),
                                                config: b(v, n, r),
                                                to: b(m, n),
                                            })
                                        ),
                                            delete N[e];
                                    });
                                    break;
                                case "update":
                                    V.forEach((e) => {
                                        const t = o.indexOf(e),
                                            n = s[t],
                                            r = "update";
                                        N[e] = d({}, N[e], {
                                            item: n,
                                            slot: r,
                                            trail: (T += j),
                                            config: b(v, n, r),
                                            to: b(f, n),
                                        });
                                    });
                            }
                        }
                        let F = o.map((e) => N[e]);
                        return (
                            S.forEach((e) => {
                                let t,
                                    n = e.left,
                                    r = (e.right, u(e, ["left", "right"]));
                                -1 !==
                                    (t = F.findIndex(
                                        (e) => e.originalKey === n
                                    )) && (t += 1),
                                    (t = Math.max(0, t)),
                                    (F = [...F.slice(0, t), r, ...F.slice(t)]);
                            }),
                            d({}, a, {
                                changed: C.length || A.length || V.length,
                                first: n && 0 === C.length,
                                transitions: F,
                                current: N,
                                deleted: S,
                                prevProps: t,
                            })
                        );
                    })(x.current, r)),
                    x.current.changed &&
                        x.current.transitions.forEach((e) => {
                            const t = e.slot,
                                n = e.from,
                                r = e.to,
                                a = e.config,
                                i = e.trail,
                                o = e.key,
                                c = e.item;
                            x.current.instances.has(o) ||
                                x.current.instances.set(o, new K());
                            const u = x.current.instances.get(o),
                                m = d({}, v, {
                                    to: r,
                                    from: n,
                                    config: a,
                                    ref: g,
                                    onRest: (n) => {
                                        if (x.current.mounted) {
                                            e.destroyed &&
                                                (g || s || Q(x, o), h && h(c));
                                            !Array.from(
                                                x.current.instances
                                            ).some((e) => !e[1].idle) &&
                                                (g || s) &&
                                                x.current.deleted.length > 0 &&
                                                Q(x),
                                                p && p(c, t, n);
                                        }
                                    },
                                    onStart: j && (() => j(c, t)),
                                    onFrame: f && ((e) => f(c, t, e)),
                                    delay: i,
                                    reset: l && "enter" === t,
                                });
                            u.update(m), x.current.paused || u.start();
                        }),
                    Object(c.useEffect)(
                        () => (
                            (x.current.mounted = y.current = !0),
                            () => {
                                (x.current.mounted = y.current = !1),
                                    Array.from(x.current.instances).map((e) =>
                                        e[1].destroy()
                                    ),
                                    x.current.instances.clear();
                            }
                        ),
                        []
                    ),
                    x.current.transitions.map((e) => {
                        let t = e.item,
                            n = e.slot,
                            r = e.key;
                        return {
                            item: t,
                            key: r,
                            state: n,
                            props: x.current.instances.get(r).getValues(),
                        };
                    })
                );
            }
            function Q(e, t) {
                const n = e.current.deleted;
                for (let r of n) {
                    let n = r.key;
                    const a = (e) => e.key !== n;
                    (h.und(t) || t === n) &&
                        (e.current.instances.delete(n),
                        (e.current.transitions =
                            e.current.transitions.filter(a)),
                        (e.current.deleted = e.current.deleted.filter(a)));
                }
                e.current.forceUpdate();
            }
            class Y extends O {
                constructor(e) {
                    void 0 === e && (e = {}),
                        super(),
                        !e.transform ||
                            e.transform instanceof g ||
                            (e = y.transform(e)),
                        (this.payload = e);
                }
            }
            const X = {
                    transparent: 0,
                    aliceblue: 4042850303,
                    antiquewhite: 4209760255,
                    aqua: 16777215,
                    aquamarine: 2147472639,
                    azure: 4043309055,
                    beige: 4126530815,
                    bisque: 4293182719,
                    black: 255,
                    blanchedalmond: 4293643775,
                    blue: 65535,
                    blueviolet: 2318131967,
                    brown: 2771004159,
                    burlywood: 3736635391,
                    burntsienna: 3934150143,
                    cadetblue: 1604231423,
                    chartreuse: 2147418367,
                    chocolate: 3530104575,
                    coral: 4286533887,
                    cornflowerblue: 1687547391,
                    cornsilk: 4294499583,
                    crimson: 3692313855,
                    cyan: 16777215,
                    darkblue: 35839,
                    darkcyan: 9145343,
                    darkgoldenrod: 3095792639,
                    darkgray: 2846468607,
                    darkgreen: 6553855,
                    darkgrey: 2846468607,
                    darkkhaki: 3182914559,
                    darkmagenta: 2332068863,
                    darkolivegreen: 1433087999,
                    darkorange: 4287365375,
                    darkorchid: 2570243327,
                    darkred: 2332033279,
                    darksalmon: 3918953215,
                    darkseagreen: 2411499519,
                    darkslateblue: 1211993087,
                    darkslategray: 793726975,
                    darkslategrey: 793726975,
                    darkturquoise: 13554175,
                    darkviolet: 2483082239,
                    deeppink: 4279538687,
                    deepskyblue: 12582911,
                    dimgray: 1768516095,
                    dimgrey: 1768516095,
                    dodgerblue: 512819199,
                    firebrick: 2988581631,
                    floralwhite: 4294635775,
                    forestgreen: 579543807,
                    fuchsia: 4278255615,
                    gainsboro: 3705462015,
                    ghostwhite: 4177068031,
                    gold: 4292280575,
                    goldenrod: 3668254975,
                    gray: 2155905279,
                    green: 8388863,
                    greenyellow: 2919182335,
                    grey: 2155905279,
                    honeydew: 4043305215,
                    hotpink: 4285117695,
                    indianred: 3445382399,
                    indigo: 1258324735,
                    ivory: 4294963455,
                    khaki: 4041641215,
                    lavender: 3873897215,
                    lavenderblush: 4293981695,
                    lawngreen: 2096890111,
                    lemonchiffon: 4294626815,
                    lightblue: 2916673279,
                    lightcoral: 4034953471,
                    lightcyan: 3774873599,
                    lightgoldenrodyellow: 4210742015,
                    lightgray: 3553874943,
                    lightgreen: 2431553791,
                    lightgrey: 3553874943,
                    lightpink: 4290167295,
                    lightsalmon: 4288707327,
                    lightseagreen: 548580095,
                    lightskyblue: 2278488831,
                    lightslategray: 2005441023,
                    lightslategrey: 2005441023,
                    lightsteelblue: 2965692159,
                    lightyellow: 4294959359,
                    lime: 16711935,
                    limegreen: 852308735,
                    linen: 4210091775,
                    magenta: 4278255615,
                    maroon: 2147483903,
                    mediumaquamarine: 1724754687,
                    mediumblue: 52735,
                    mediumorchid: 3126187007,
                    mediumpurple: 2473647103,
                    mediumseagreen: 1018393087,
                    mediumslateblue: 2070474495,
                    mediumspringgreen: 16423679,
                    mediumturquoise: 1221709055,
                    mediumvioletred: 3340076543,
                    midnightblue: 421097727,
                    mintcream: 4127193855,
                    mistyrose: 4293190143,
                    moccasin: 4293178879,
                    navajowhite: 4292783615,
                    navy: 33023,
                    oldlace: 4260751103,
                    olive: 2155872511,
                    olivedrab: 1804477439,
                    orange: 4289003775,
                    orangered: 4282712319,
                    orchid: 3664828159,
                    palegoldenrod: 4008225535,
                    palegreen: 2566625535,
                    paleturquoise: 2951671551,
                    palevioletred: 3681588223,
                    papayawhip: 4293907967,
                    peachpuff: 4292524543,
                    peru: 3448061951,
                    pink: 4290825215,
                    plum: 3718307327,
                    powderblue: 2967529215,
                    purple: 2147516671,
                    rebeccapurple: 1714657791,
                    red: 4278190335,
                    rosybrown: 3163525119,
                    royalblue: 1097458175,
                    saddlebrown: 2336560127,
                    salmon: 4202722047,
                    sandybrown: 4104413439,
                    seagreen: 780883967,
                    seashell: 4294307583,
                    sienna: 2689740287,
                    silver: 3233857791,
                    skyblue: 2278484991,
                    slateblue: 1784335871,
                    slategray: 1887473919,
                    slategrey: 1887473919,
                    snow: 4294638335,
                    springgreen: 16744447,
                    steelblue: 1182971135,
                    tan: 3535047935,
                    teal: 8421631,
                    thistle: 3636451583,
                    tomato: 4284696575,
                    turquoise: 1088475391,
                    violet: 4001558271,
                    wheat: 4125012991,
                    white: 4294967295,
                    whitesmoke: 4126537215,
                    yellow: 4294902015,
                    yellowgreen: 2597139199,
                },
                Z = "[-+]?\\d*\\.?\\d+";
            function ee() {
                for (
                    var e = arguments.length, t = new Array(e), n = 0;
                    n < e;
                    n++
                )
                    t[n] = arguments[n];
                return "\\(\\s*(" + t.join(")\\s*,\\s*(") + ")\\s*\\)";
            }
            const te = new RegExp("rgb" + ee(Z, Z, Z)),
                ne = new RegExp("rgba" + ee(Z, Z, Z, Z)),
                re = new RegExp(
                    "hsl" + ee(Z, "[-+]?\\d*\\.?\\d+%", "[-+]?\\d*\\.?\\d+%")
                ),
                ae = new RegExp(
                    "hsla" +
                        ee(Z, "[-+]?\\d*\\.?\\d+%", "[-+]?\\d*\\.?\\d+%", Z)
                ),
                ie = /^#([0-9a-fA-F]{1})([0-9a-fA-F]{1})([0-9a-fA-F]{1})$/,
                se =
                    /^#([0-9a-fA-F]{1})([0-9a-fA-F]{1})([0-9a-fA-F]{1})([0-9a-fA-F]{1})$/,
                oe = /^#([0-9a-fA-F]{6})$/,
                ce = /^#([0-9a-fA-F]{8})$/;
            function le(e, t, n) {
                return (
                    n < 0 && (n += 1),
                    n > 1 && (n -= 1),
                    n < 1 / 6
                        ? e + 6 * (t - e) * n
                        : n < 0.5
                        ? t
                        : n < 2 / 3
                        ? e + (t - e) * (2 / 3 - n) * 6
                        : e
                );
            }
            function de(e, t, n) {
                const r = n < 0.5 ? n * (1 + t) : n + t - n * t,
                    a = 2 * n - r,
                    i = le(a, r, e + 1 / 3),
                    s = le(a, r, e),
                    o = le(a, r, e - 1 / 3);
                return (
                    (Math.round(255 * i) << 24) |
                    (Math.round(255 * s) << 16) |
                    (Math.round(255 * o) << 8)
                );
            }
            function ue(e) {
                const t = parseInt(e, 10);
                return t < 0 ? 0 : t > 255 ? 255 : t;
            }
            function he(e) {
                return (((parseFloat(e) % 360) + 360) % 360) / 360;
            }
            function me(e) {
                const t = parseFloat(e);
                return t < 0 ? 0 : t > 1 ? 255 : Math.round(255 * t);
            }
            function fe(e) {
                const t = parseFloat(e);
                return t < 0 ? 0 : t > 100 ? 1 : t / 100;
            }
            function pe(e) {
                let t = (function (e) {
                    let t;
                    return "number" === typeof e
                        ? e >>> 0 === e && e >= 0 && e <= 4294967295
                            ? e
                            : null
                        : (t = oe.exec(e))
                        ? parseInt(t[1] + "ff", 16) >>> 0
                        : X.hasOwnProperty(e)
                        ? X[e]
                        : (t = te.exec(e))
                        ? ((ue(t[1]) << 24) |
                              (ue(t[2]) << 16) |
                              (ue(t[3]) << 8) |
                              255) >>>
                          0
                        : (t = ne.exec(e))
                        ? ((ue(t[1]) << 24) |
                              (ue(t[2]) << 16) |
                              (ue(t[3]) << 8) |
                              me(t[4])) >>>
                          0
                        : (t = ie.exec(e))
                        ? parseInt(
                              t[1] + t[1] + t[2] + t[2] + t[3] + t[3] + "ff",
                              16
                          ) >>> 0
                        : (t = ce.exec(e))
                        ? parseInt(t[1], 16) >>> 0
                        : (t = se.exec(e))
                        ? parseInt(
                              t[1] +
                                  t[1] +
                                  t[2] +
                                  t[2] +
                                  t[3] +
                                  t[3] +
                                  t[4] +
                                  t[4],
                              16
                          ) >>> 0
                        : (t = re.exec(e))
                        ? (255 | de(he(t[1]), fe(t[2]), fe(t[3]))) >>> 0
                        : (t = ae.exec(e))
                        ? (de(he(t[1]), fe(t[2]), fe(t[3])) | me(t[4])) >>> 0
                        : null;
                })(e);
                return null === t
                    ? e
                    : ((t = t || 0),
                      `rgba(${(4278190080 & t) >>> 24}, ${
                          (16711680 & t) >>> 16
                      }, ${(65280 & t) >>> 8}, ${(255 & t) / 255})`);
            }
            const be = /[+\-]?(?:0|[1-9]\d*)(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,
                je =
                    /(#(?:[0-9a-f]{2}){2,4}|(#[0-9a-f]{3})|(rgb|hsl)a?\((-?\d+%?[,\s]+){2,3}\s*[\d\.]+%?\))/gi,
                ge = new RegExp(`(${Object.keys(X).join("|")})`, "g");
            let ve = {
                animationIterationCount: !0,
                borderImageOutset: !0,
                borderImageSlice: !0,
                borderImageWidth: !0,
                boxFlex: !0,
                boxFlexGroup: !0,
                boxOrdinalGroup: !0,
                columnCount: !0,
                columns: !0,
                flex: !0,
                flexGrow: !0,
                flexPositive: !0,
                flexShrink: !0,
                flexNegative: !0,
                flexOrder: !0,
                gridRow: !0,
                gridRowEnd: !0,
                gridRowSpan: !0,
                gridRowStart: !0,
                gridColumn: !0,
                gridColumnEnd: !0,
                gridColumnSpan: !0,
                gridColumnStart: !0,
                fontWeight: !0,
                lineClamp: !0,
                lineHeight: !0,
                opacity: !0,
                order: !0,
                orphans: !0,
                tabSize: !0,
                widows: !0,
                zIndex: !0,
                zoom: !0,
                fillOpacity: !0,
                floodOpacity: !0,
                stopOpacity: !0,
                strokeDasharray: !0,
                strokeDashoffset: !0,
                strokeMiterlimit: !0,
                strokeOpacity: !0,
                strokeWidth: !0,
            };
            const Oe = ["Webkit", "Ms", "Moz", "O"];
            function ye(e, t, n) {
                return null == t || "boolean" === typeof t || "" === t
                    ? ""
                    : n ||
                      "number" !== typeof t ||
                      0 === t ||
                      (ve.hasOwnProperty(e) && ve[e])
                    ? ("" + t).trim()
                    : t + "px";
            }
            ve = Object.keys(ve).reduce(
                (e, t) => (
                    Oe.forEach(
                        (n) =>
                            (e[
                                ((e, t) =>
                                    e +
                                    t.charAt(0).toUpperCase() +
                                    t.substring(1))(n, t)
                            ] = e[t])
                    ),
                    e
                ),
                ve
            );
            const xe = {};
            F((e) => new Y(e)),
                C("div"),
                E((e) => {
                    const t = e.output
                            .map((e) => e.replace(je, pe))
                            .map((e) => e.replace(ge, pe)),
                        n = t[0].match(be).map(() => []);
                    t.forEach((e) => {
                        e.match(be).forEach((e, t) => n[t].push(+e));
                    });
                    const r = t[0]
                        .match(be)
                        .map((t, r) => L(d({}, e, { output: n[r] })));
                    return (e) => {
                        let n = 0;
                        return t[0]
                            .replace(be, () => r[n++](e))
                            .replace(
                                /rgba\(([0-9\.-]+), ([0-9\.-]+), ([0-9\.-]+), ([0-9\.-]+)\)/gi,
                                (e, t, n, r, a) =>
                                    `rgba(${Math.round(t)}, ${Math.round(
                                        n
                                    )}, ${Math.round(r)}, ${a})`
                            );
                    };
                }),
                k(X),
                w(
                    (e, t) => {
                        if (!e.nodeType || void 0 === e.setAttribute) return !1;
                        {
                            const a = t.style,
                                i = t.children,
                                s = t.scrollTop,
                                o = t.scrollLeft,
                                c = u(t, [
                                    "style",
                                    "children",
                                    "scrollTop",
                                    "scrollLeft",
                                ]),
                                l =
                                    "filter" === e.nodeName ||
                                    (e.parentNode &&
                                        "filter" === e.parentNode.nodeName);
                            void 0 !== s && (e.scrollTop = s),
                                void 0 !== o && (e.scrollLeft = o),
                                void 0 !== i && (e.textContent = i);
                            for (let t in a)
                                if (a.hasOwnProperty(t)) {
                                    var n = 0 === t.indexOf("--"),
                                        r = ye(t, a[t], n);
                                    "float" === t && (t = "cssFloat"),
                                        n
                                            ? e.style.setProperty(t, r)
                                            : (e.style[t] = r);
                                }
                            for (let t in c) {
                                const n = l
                                    ? t
                                    : xe[t] ||
                                      (xe[t] = t.replace(
                                          /([A-Z])/g,
                                          (e) => "-" + e.toLowerCase()
                                      ));
                                "undefined" !== typeof e.getAttribute(n) &&
                                    e.setAttribute(n, c[t]);
                            }
                        }
                    },
                    (e) => e
                );
            var we, ke;
            const Ne = ((we = (e) =>
                Object(c.forwardRef)((t, n) => {
                    const r = m(),
                        a = Object(c.useRef)(!0),
                        i = Object(c.useRef)(null),
                        s = Object(c.useRef)(null),
                        o = Object(c.useCallback)((e) => {
                            const t = i.current;
                            (i.current = new R(e, () => {
                                let e = !1;
                                s.current &&
                                    (e = y.fn(
                                        s.current,
                                        i.current.getAnimatedValue()
                                    )),
                                    (s.current && !1 !== e) || r();
                            })),
                                t && t.detach();
                        }, []);
                    Object(c.useEffect)(
                        () => () => {
                            (a.current = !1), i.current && i.current.detach();
                        },
                        []
                    ),
                        Object(c.useImperativeHandle)(n, () => T(s, a, r)),
                        o(t);
                    const f = i.current.getValue(),
                        p =
                            (f.scrollTop,
                            f.scrollLeft,
                            u(f, ["scrollTop", "scrollLeft"])),
                        b =
                            ((j = e),
                            !h.fun(j) || j.prototype instanceof l.a.Component
                                ? (e) =>
                                      (s.current = (function (e, t) {
                                          return (
                                              t &&
                                                  (h.fun(t)
                                                      ? t(e)
                                                      : h.obj(t) &&
                                                        (t.current = e)),
                                              e
                                          );
                                      })(e, n))
                                : void 0);
                    var j;
                    return l.a.createElement(e, d({}, p, { ref: b }));
                })),
            void 0 === (ke = !1) && (ke = !0),
            (e) =>
                (h.arr(e) ? e : Object.keys(e)).reduce((e, t) => {
                    const n = ke ? t[0].toLowerCase() + t.substring(1) : t;
                    return (e[n] = we(n)), e;
                }, we))([
                "a",
                "abbr",
                "address",
                "area",
                "article",
                "aside",
                "audio",
                "b",
                "base",
                "bdi",
                "bdo",
                "big",
                "blockquote",
                "body",
                "br",
                "button",
                "canvas",
                "caption",
                "cite",
                "code",
                "col",
                "colgroup",
                "data",
                "datalist",
                "dd",
                "del",
                "details",
                "dfn",
                "dialog",
                "div",
                "dl",
                "dt",
                "em",
                "embed",
                "fieldset",
                "figcaption",
                "figure",
                "footer",
                "form",
                "h1",
                "h2",
                "h3",
                "h4",
                "h5",
                "h6",
                "head",
                "header",
                "hgroup",
                "hr",
                "html",
                "i",
                "iframe",
                "img",
                "input",
                "ins",
                "kbd",
                "keygen",
                "label",
                "legend",
                "li",
                "link",
                "main",
                "map",
                "mark",
                "menu",
                "menuitem",
                "meta",
                "meter",
                "nav",
                "noscript",
                "object",
                "ol",
                "optgroup",
                "option",
                "output",
                "p",
                "param",
                "picture",
                "pre",
                "progress",
                "q",
                "rp",
                "rt",
                "ruby",
                "s",
                "samp",
                "script",
                "section",
                "select",
                "small",
                "source",
                "span",
                "strong",
                "style",
                "sub",
                "summary",
                "sup",
                "table",
                "tbody",
                "td",
                "textarea",
                "tfoot",
                "th",
                "thead",
                "time",
                "title",
                "tr",
                "track",
                "u",
                "ul",
                "var",
                "video",
                "wbr",
                "circle",
                "clipPath",
                "defs",
                "ellipse",
                "foreignObject",
                "g",
                "image",
                "line",
                "linearGradient",
                "mask",
                "path",
                "pattern",
                "polygon",
                "polyline",
                "radialGradient",
                "rect",
                "stop",
                "svg",
                "text",
                "tspan",
            ]);
            function Se(e, t) {
                var n = Object.keys(e);
                if (Object.getOwnPropertySymbols) {
                    var r = Object.getOwnPropertySymbols(e);
                    t &&
                        (r = r.filter(function (t) {
                            return Object.getOwnPropertyDescriptor(
                                e,
                                t
                            ).enumerable;
                        })),
                        n.push.apply(n, r);
                }
                return n;
            }
            function Ee(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = null != arguments[t] ? arguments[t] : {};
                    t % 2
                        ? Se(Object(n), !0).forEach(function (t) {
                              Object(a.a)(e, t, n[t]);
                          })
                        : Object.getOwnPropertyDescriptors
                        ? Object.defineProperties(
                              e,
                              Object.getOwnPropertyDescriptors(n)
                          )
                        : Se(Object(n)).forEach(function (t) {
                              Object.defineProperty(
                                  e,
                                  t,
                                  Object.getOwnPropertyDescriptor(n, t)
                              );
                          });
                }
                return e;
            }
            var _e = function (e) {
                    var t = e.banners,
                        n = Object(c.useState)(0),
                        a = n[0],
                        i = n[1],
                        l = Object(o.useRouter)(),
                        d = B(
                            t[a],
                            function (e) {
                                return e.id;
                            },
                            {
                                from: { opacity: 0 },
                                enter: { opacity: 1 },
                                leave: { opacity: 0 },
                                config: z.molasses,
                            }
                        );
                    return (
                        Object(c.useEffect)(function () {
                            setInterval(function () {
                                return i(function (e) {
                                    return (e + 1) % t.length;
                                });
                            }, 5e3);
                        }, []),
                        Object(r.jsx)(r.Fragment, {
                            children: Object(r.jsxs)("div", {
                                id: "banner",
                                children: [
                                    d.map(function (e) {
                                        var t = e.item,
                                            n = e.props,
                                            a = e.key;
                                        return Object(r.jsx)(
                                            Ne.div,
                                            {
                                                className: "slider1",
                                                style: Ee(
                                                    Ee({}, n),
                                                    {},
                                                    {
                                                        backgroundImage:
                                                            "url(".concat(
                                                                t.image.url,
                                                                ")"
                                                            ),
                                                    }
                                                ),
                                            },
                                            a
                                        );
                                    }),
                                    Object(r.jsx)("div", {
                                        className: "gradient-cover",
                                    }),
                                    Object(r.jsx)("div", {
                                        className: "wrapper",
                                        children: Object(r.jsx)("div", {
                                            className: "row",
                                            children: Object(r.jsx)("div", {
                                                className:
                                                    "col-lg-7 position-static",
                                                children: Object(r.jsxs)(
                                                    "div",
                                                    {
                                                        className:
                                                            "banner-wrap",
                                                        children: [
                                                            Object(r.jsxs)(
                                                                "div",
                                                                {
                                                                    className:
                                                                        "position-relative",
                                                                    children: [
                                                                        Object(
                                                                            r.jsx
                                                                        )(
                                                                            "h1",
                                                                            {
                                                                                className:
                                                                                    "banner-text",
                                                                                children:
                                                                                    t[
                                                                                        a
                                                                                    ]
                                                                                        .text[
                                                                                        "".concat(
                                                                                            l.locale,
                                                                                            "_"
                                                                                        )
                                                                                    ],
                                                                            }
                                                                        ),
                                                                        Object(
                                                                            r.jsx
                                                                        )("p", {
                                                                            className:
                                                                                "banner-subtext",
                                                                            children:
                                                                                t[
                                                                                    a
                                                                                ]
                                                                                    .subtext[
                                                                                    "".concat(
                                                                                        l.locale,
                                                                                        "_"
                                                                                    )
                                                                                ],
                                                                        }),
                                                                    ],
                                                                }
                                                            ),
                                                            Object(r.jsxs)(
                                                                "div",
                                                                {
                                                                    className:
                                                                        "btn-wrapper",
                                                                    children: [
                                                                        Object(
                                                                            r.jsx
                                                                        )(s.a, {
                                                                            href: t[
                                                                                a
                                                                            ]
                                                                                .link,
                                                                            children:
                                                                                Object(
                                                                                    r.jsx
                                                                                )(
                                                                                    "a",
                                                                                    {
                                                                                        className:
                                                                                            "banner-cta",
                                                                                        children:
                                                                                            "Read More",
                                                                                    }
                                                                                ),
                                                                        }),
                                                                        Object(
                                                                            r.jsx
                                                                        )(
                                                                            "div",
                                                                            {
                                                                                className:
                                                                                    "slide-nav",
                                                                                children:
                                                                                    t.map(
                                                                                        function (
                                                                                            e,
                                                                                            t
                                                                                        ) {
                                                                                            return Object(
                                                                                                r.jsx
                                                                                            )(
                                                                                                "div",
                                                                                                {
                                                                                                    className:
                                                                                                        "nav-item ".concat(
                                                                                                            a ===
                                                                                                                t
                                                                                                                ? "slide-active"
                                                                                                                : ""
                                                                                                        ),
                                                                                                    onClick:
                                                                                                        function () {
                                                                                                            return i(
                                                                                                                t
                                                                                                            );
                                                                                                        },
                                                                                                },
                                                                                                t
                                                                                            );
                                                                                        }
                                                                                    ),
                                                                            }
                                                                        ),
                                                                    ],
                                                                }
                                                            ),
                                                        ],
                                                    }
                                                ),
                                            }),
                                        }),
                                    }),
                                ],
                            }),
                        })
                    );
                },
                Pe = n("LvDl"),
                Ce = n.n(Pe),
                Ae = n("nbPw"),
                Ve = function (e) {
                    var t = e.aboutData,
                        n = Object(Ae.a)("common"),
                        a = n.t,
                        i = (n.lang, Object(o.useRouter)());
                    return Object(r.jsx)(r.Fragment, {
                        children: Object(r.jsx)("div", {
                            id: "about",
                            children: Object(r.jsxs)("div", {
                                className: "wrapper",
                                children: [
                                    Object(r.jsx)("h1", {
                                        className: "section-title",
                                        dangerouslySetInnerHTML: {
                                            __html: a("aboutSectionTitle"),
                                        },
                                    }),
                                    Object(r.jsxs)("div", {
                                        className: "row",
                                        children: [
                                            Object(r.jsxs)("div", {
                                                className: "col-lg-6 left",
                                                children: [
                                                    Object(r.jsxs)("p", {
                                                        children: [
                                                            Ce.a.truncate(
                                                                t.about_content[
                                                                    "".concat(
                                                                        i.locale,
                                                                        "_"
                                                                    )
                                                                ].replace(
                                                                    /<[^>]+>/g,
                                                                    ""
                                                                ),
                                                                {
                                                                    length: 200,
                                                                    separator:
                                                                        /,?\.* +/,
                                                                }
                                                            ),
                                                            Object(r.jsx)(s.a, {
                                                                href: "/about",
                                                                children:
                                                                    Object(
                                                                        r.jsx
                                                                    )("a", {
                                                                        children:
                                                                            a(
                                                                                "readMore"
                                                                            ),
                                                                    }),
                                                            }),
                                                        ],
                                                    }),
                                                    Object(r.jsx)("img", {
                                                        src: "/assets/information-about-Halim-Sakti.jpg",
                                                        alt: "pics",
                                                    }),
                                                ],
                                            }),
                                            Object(r.jsx)("div", {
                                                className: "col-lg-6 right",
                                                children: t.list.map(function (
                                                    e,
                                                    t
                                                ) {
                                                    return Object(r.jsxs)(
                                                        "div",
                                                        {
                                                            className:
                                                                "about-section2_item",
                                                            children: [
                                                                Object(r.jsx)(
                                                                    "img",
                                                                    {
                                                                        src: e
                                                                            .icon
                                                                            .url,
                                                                        alt: "icon1",
                                                                    }
                                                                ),
                                                                Object(r.jsx)(
                                                                    "p",
                                                                    {
                                                                        dangerouslySetInnerHTML:
                                                                            {
                                                                                __html: e
                                                                                    .text[
                                                                                    "".concat(
                                                                                        i.locale,
                                                                                        "_"
                                                                                    )
                                                                                ],
                                                                            },
                                                                    }
                                                                ),
                                                            ],
                                                        },
                                                        t
                                                    );
                                                }),
                                            }),
                                        ],
                                    }),
                                ],
                            }),
                        }),
                    });
                },
                Te = n("Qog0"),
                Fe = n("B3/I"),
                Re = n.n(Fe),
                Me = function (e) {
                    var t = e.whyMust,
                        n = Object(c.useState)(0),
                        a = n[0],
                        i = n[1],
                        s = Object(c.useState)(0),
                        l = s[0],
                        d = s[1],
                        u = Object(o.useRouter)(),
                        h = Object(Ae.a)("common").t;
                    return (
                        Object(c.useEffect)(function () {
                            var e = setInterval(function () {
                                var e = t.length;
                                d(function (t) {
                                    return t < e - 1 ? t + 1 : 0;
                                });
                            }, 5e3);
                            return function () {
                                return clearInterval(e);
                            };
                        }, []),
                        Object(r.jsx)(r.Fragment, {
                            children: Object(r.jsx)("div", {
                                id: "why-must",
                                children: Object(r.jsx)("div", {
                                    className: "wrapper",
                                    children: Object(r.jsxs)("div", {
                                        className: "row",
                                        children: [
                                            Object(r.jsxs)("div", {
                                                className: "col-md-6 left",
                                                children: [
                                                    Object(r.jsx)("h1", {
                                                        className:
                                                            "section-title",
                                                        dangerouslySetInnerHTML:
                                                            {
                                                                __html: h(
                                                                    "whyMustSectionTitle"
                                                                ),
                                                            },
                                                    }),
                                                    Object(r.jsxs)("div", {
                                                        className:
                                                            "card-slider",
                                                        children: [
                                                            Object(r.jsx)(
                                                                Re.a,
                                                                {
                                                                    baseClassName:
                                                                        "animate__animated animate__fadeIn",
                                                                    animationClassName:
                                                                        "animate__fadeOut",
                                                                    customTag:
                                                                        "div",
                                                                    animate:
                                                                        a != l,
                                                                    onAnimationStart:
                                                                        function () {
                                                                            return i(
                                                                                l
                                                                            );
                                                                        },
                                                                    children:
                                                                        Object(
                                                                            r.jsx
                                                                        )("p", {
                                                                            children:
                                                                                t[
                                                                                    a
                                                                                ]
                                                                                    .text[
                                                                                    "".concat(
                                                                                        u.locale,
                                                                                        "_"
                                                                                    )
                                                                                ],
                                                                        }),
                                                                }
                                                            ),
                                                            Object(r.jsx)(
                                                                "div",
                                                                {
                                                                    className:
                                                                        "slide-nav",
                                                                    children:
                                                                        t.map(
                                                                            function (
                                                                                e,
                                                                                t
                                                                            ) {
                                                                                return Object(
                                                                                    r.jsx
                                                                                )(
                                                                                    "div",
                                                                                    {
                                                                                        className:
                                                                                            "nav-item ".concat(
                                                                                                a ===
                                                                                                    t
                                                                                                    ? "slide-active"
                                                                                                    : null
                                                                                            ),
                                                                                        onClick:
                                                                                            function () {
                                                                                                d(
                                                                                                    t
                                                                                                );
                                                                                            },
                                                                                    },
                                                                                    t
                                                                                );
                                                                            }
                                                                        ),
                                                                }
                                                            ),
                                                        ],
                                                    }),
                                                ],
                                            }),
                                            Object(r.jsx)("div", {
                                                className: "col-md-6 right",
                                                children: Object(r.jsx)(Re.a, {
                                                    baseClassName:
                                                        "row animate__animated animate__fadeIn animate__faster",
                                                    animationClassName:
                                                        "animate__fadeOut",
                                                    customTag: "div",
                                                    animate: a != l,
                                                    onAnimationEnd:
                                                        function () {
                                                            return i(l);
                                                        },
                                                    children: Object(r.jsx)(
                                                        "div",
                                                        {
                                                            className:
                                                                "right-wrap",
                                                            style: {
                                                                background:
                                                                    "url(".concat(
                                                                        t[a]
                                                                            .image
                                                                            .url,
                                                                        ") no-repeat center center / cover"
                                                                    ),
                                                            },
                                                        }
                                                    ),
                                                }),
                                            }),
                                        ],
                                    }),
                                }),
                            }),
                        })
                    );
                },
                qe = function (e) {
                    var t = e.products,
                        n = Object(o.useRouter)(),
                        a = Object(Ae.a)("common").t;
                    return Object(r.jsx)(r.Fragment, {
                        children: Object(r.jsx)("div", {
                            id: "product",
                            children: Object(r.jsxs)("div", {
                                className: "wrapper",
                                children: [
                                    Object(r.jsx)("h1", {
                                        className: "section-title",
                                        children: a("productSectionTitle"),
                                    }),
                                    Object(r.jsx)("div", {
                                        className: "product-list",
                                        children: t.map(function (e) {
                                            return Object(r.jsx)(
                                                "div",
                                                {
                                                    className: "product-item",
                                                    style: {
                                                        background:
                                                            "url(".concat(
                                                                e.images[0].url,
                                                                ") no-repeat center center / cover"
                                                            ),
                                                    },
                                                    onClick: function () {
                                                        return n.push(
                                                            "product/".concat(
                                                                e.slug
                                                            )
                                                        );
                                                    },
                                                    children: Object(r.jsx)(
                                                        "h2",
                                                        {
                                                            children:
                                                                e.name[
                                                                    "".concat(
                                                                        n.locale,
                                                                        "_"
                                                                    )
                                                                ],
                                                        }
                                                    ),
                                                },
                                                e.id
                                            );
                                        }),
                                    }),
                                ],
                            }),
                        }),
                    });
                },
                Ie = function (e) {
                    var t = e.testi,
                        n = Object(c.useState)(0),
                        a = n[0],
                        i = n[1],
                        s = Object(c.useState)(0),
                        l = s[0],
                        d = s[1],
                        u = Object(o.useRouter)(),
                        h = Object(Ae.a)("common").t;
                    return (
                        Object(c.useEffect)(function () {
                            var e = setInterval(function () {
                                var e = t.length;
                                d(function (t) {
                                    return t < e - 1 ? t + 1 : 0;
                                });
                            }, 2e4);
                            return function () {
                                return clearInterval(e);
                            };
                        }, []),
                        Object(r.jsx)(r.Fragment, {
                            children: Object(r.jsx)("div", {
                                id: "testimonial",
                                children: Object(r.jsxs)("div", {
                                    className: "wrapper",
                                    children: [
                                        Object(r.jsxs)(Re.a, {
                                            baseClassName:
                                                "row animate__animated animate__fadeIn",
                                            animationClassName:
                                                "animate__fadeOut",
                                            customTag: "div",
                                            animate: a != l,
                                            onAnimationStart: function () {
                                                return i(l);
                                            },
                                            children: [
                                                Object(r.jsx)("div", {
                                                    className: "col-md-5 left",
                                                    children: Object(r.jsx)(
                                                        "div",
                                                        {
                                                            className:
                                                                "photo-wrap",
                                                            style: {
                                                                background:
                                                                    "url(".concat(
                                                                        t[a]
                                                                            .photo
                                                                            .url,
                                                                        ") no-repeat top center / cover"
                                                                    ),
                                                            },
                                                        }
                                                    ),
                                                }),
                                                Object(r.jsxs)("div", {
                                                    className: "col-md-7 right",
                                                    children: [
                                                        Object(r.jsx)("h1", {
                                                            className:
                                                                "section-title",
                                                            children:
                                                                h(
                                                                    "testiSectionTitle"
                                                                ),
                                                        }),
                                                        Object(r.jsx)("p", {
                                                            className:
                                                                "testi-body",
                                                            children:
                                                                t[a]
                                                                    .testimonial[
                                                                    "".concat(
                                                                        u.locale,
                                                                        "_"
                                                                    )
                                                                ],
                                                        }),
                                                        Object(r.jsx)("div", {
                                                            className:
                                                                "testi-name",
                                                            children: t[a].name,
                                                        }),
                                                        Object(r.jsxs)("p", {
                                                            children: [
                                                                t[a].position +
                                                                    ",  ",
                                                                Object(r.jsx)(
                                                                    "br",
                                                                    {}
                                                                ),
                                                                t[a].company,
                                                            ],
                                                        }),
                                                    ],
                                                }),
                                            ],
                                        }),
                                        Object(r.jsx)("div", {
                                            className: "slide-nav",
                                            children: t.map(function (e, t) {
                                                return Object(r.jsx)(
                                                    "div",
                                                    {
                                                        className:
                                                            "nav-item ".concat(
                                                                a === t
                                                                    ? "slide-active"
                                                                    : null
                                                            ),
                                                        onClick: function () {
                                                            d(t);
                                                        },
                                                    },
                                                    t
                                                );
                                            }),
                                        }),
                                    ],
                                }),
                            }),
                        })
                    );
                },
                Le = n("OS56"),
                De = n.n(Le);
            function ze(e, t) {
                var n = Object.keys(e);
                if (Object.getOwnPropertySymbols) {
                    var r = Object.getOwnPropertySymbols(e);
                    t &&
                        (r = r.filter(function (t) {
                            return Object.getOwnPropertyDescriptor(
                                e,
                                t
                            ).enumerable;
                        })),
                        n.push.apply(n, r);
                }
                return n;
            }
            function He(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = null != arguments[t] ? arguments[t] : {};
                    t % 2
                        ? ze(Object(n), !0).forEach(function (t) {
                              Object(a.a)(e, t, n[t]);
                          })
                        : Object.getOwnPropertyDescriptors
                        ? Object.defineProperties(
                              e,
                              Object.getOwnPropertyDescriptors(n)
                          )
                        : ze(Object(n)).forEach(function (t) {
                              Object.defineProperty(
                                  e,
                                  t,
                                  Object.getOwnPropertyDescriptor(n, t)
                              );
                          });
                }
                return e;
            }
            var $e = function (e) {
                    var t = e.onClick;
                    return Object(r.jsx)("div", {
                        className: "next-arrow",
                        children: Object(r.jsx)("img", {
                            src: "/assets/arrow-right.jpg",
                            alt: "next",
                            onClick: t,
                            onMouseEnter: function (e) {
                                return (e.target.src =
                                    "/assets/arrow-right-active.jpg");
                            },
                            onMouseLeave: function (e) {
                                return (e.target.src =
                                    "/assets/arrow-right.jpg");
                            },
                        }),
                    });
                },
                Ge = function (e) {
                    var t = e.onClick;
                    return Object(r.jsx)("div", {
                        className: "prev-arrow",
                        children: Object(r.jsx)("img", {
                            src: "/assets/arrow-left.jpg",
                            alt: "prev",
                            onClick: t,
                            onMouseEnter: function (e) {
                                return (e.target.src =
                                    "/assets/arrow-left-active.jpg");
                            },
                            onMouseLeave: function (e) {
                                return (e.target.src =
                                    "/assets/arrow-left.jpg");
                            },
                        }),
                    });
                },
                Ke = function (e) {
                    var t = Object(Ae.a)("common").t,
                        n = Object(o.useRouter)(),
                        a = {
                            className: "slider2",
                            centerMode: !0,
                            centerPadding: "30%",
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            speed: 500,
                            infinite: !0,
                            dots: !0,
                            dotsClass: "custom-dots",
                            nextArrow: Object(r.jsx)($e, {}),
                            prevArrow: Object(r.jsx)(Ge, {}),
                            responsive: [
                                {
                                    breakpoint: 1440,
                                    settings: { centerPadding: "25%" },
                                },
                                {
                                    breakpoint: 768,
                                    settings: { centerPadding: "10%" },
                                },
                            ],
                        };
                    return Object(r.jsx)(r.Fragment, {
                        children: Object(r.jsxs)("div", {
                            id: "news",
                            children: [
                                Object(r.jsx)("div", {
                                    className: "wrapper",
                                    children: Object(r.jsx)("h1", {
                                        className: "section-title",
                                        children: t("newsSectionTitle"),
                                    }),
                                }),
                                Object(r.jsx)("div", {
                                    className: "wrapper news-list",
                                    children: Object(r.jsx)(
                                        De.a,
                                        He(
                                            He({}, a),
                                            {},
                                            {
                                                children: e.articles.map(
                                                    function (e, t) {
                                                        return Object(r.jsx)(
                                                            "div",
                                                            {
                                                                className:
                                                                    "news-item",
                                                                children:
                                                                    Object(
                                                                        r.jsx
                                                                    )("div", {
                                                                        className:
                                                                            "news-wrap",
                                                                        style: {
                                                                            background:
                                                                                "url(".concat(
                                                                                    e
                                                                                        .cover
                                                                                        .url,
                                                                                    ") no-repeat center center / cover"
                                                                                ),
                                                                        },
                                                                        children:
                                                                            Object(
                                                                                r.jsxs
                                                                            )(
                                                                                "div",
                                                                                {
                                                                                    className:
                                                                                        "news-text",
                                                                                    children:
                                                                                        [
                                                                                            Object(
                                                                                                r.jsx
                                                                                            )(
                                                                                                "div",
                                                                                                {
                                                                                                    className:
                                                                                                        "cat",
                                                                                                    children:
                                                                                                        e
                                                                                                            .title[
                                                                                                            "".concat(
                                                                                                                n.locale,
                                                                                                                "_"
                                                                                                            )
                                                                                                        ],
                                                                                                }
                                                                                            ),
                                                                                            Object(
                                                                                                r.jsx
                                                                                            )(
                                                                                                "div",
                                                                                                {
                                                                                                    className:
                                                                                                        "title",
                                                                                                    children:
                                                                                                        e
                                                                                                            .excerpt[
                                                                                                            "".concat(
                                                                                                                n.locale,
                                                                                                                "_"
                                                                                                            )
                                                                                                        ],
                                                                                                }
                                                                                            ),
                                                                                            Object(
                                                                                                r.jsx
                                                                                            )(
                                                                                                s.a,
                                                                                                {
                                                                                                    href: "/article/".concat(
                                                                                                        e.slug
                                                                                                    ),
                                                                                                    children:
                                                                                                        Object(
                                                                                                            r.jsx
                                                                                                        )(
                                                                                                            "a",
                                                                                                            {
                                                                                                                className:
                                                                                                                    "rm-button",
                                                                                                                children:
                                                                                                                    "Read More",
                                                                                                            }
                                                                                                        ),
                                                                                                }
                                                                                            ),
                                                                                        ],
                                                                                }
                                                                            ),
                                                                    }),
                                                            },
                                                            t
                                                        );
                                                    }
                                                ),
                                            }
                                        )
                                    ),
                                }),
                            ],
                        }),
                    });
                },
                We = n("Tgqd"),
                Je = n("vDqi"),
                Ue = n.n(Je),
                Be = function (e) {
                    var t = Object(c.useState)(""),
                        n = t[0],
                        a = t[1],
                        i = Object(c.useState)(""),
                        s = i[0],
                        o = i[1],
                        l = Object(Ae.a)("common").t;
                    return Object(r.jsx)(r.Fragment, {
                        children: Object(r.jsx)("div", {
                            id: "brochure",
                            children: Object(r.jsx)("div", {
                                className: "wrapper",
                                children: Object(r.jsxs)("div", {
                                    className: "row",
                                    children: [
                                        Object(r.jsx)("div", {
                                            className: "col-md-6 left",
                                            children: Object(r.jsx)("img", {
                                                src: "/assets/brosur.png",
                                                alt: "brosur",
                                            }),
                                        }),
                                        Object(r.jsx)("div", {
                                            className: "col-md-6 right",
                                            children: Object(r.jsxs)("div", {
                                                className: "form-brosur",
                                                children: [
                                                    Object(r.jsxs)("div", {
                                                        className: "form-field",
                                                        children: [
                                                            Object(r.jsx)(
                                                                "label",
                                                                {
                                                                    htmlFor:
                                                                        "name",
                                                                    children:
                                                                        "Name",
                                                                }
                                                            ),
                                                            Object(r.jsx)(
                                                                "input",
                                                                {
                                                                    type: "text",
                                                                    id: "name",
                                                                    value: n,
                                                                    onChange:
                                                                        function (
                                                                            e
                                                                        ) {
                                                                            return a(
                                                                                e
                                                                                    .target
                                                                                    .value
                                                                            );
                                                                        },
                                                                    required:
                                                                        !0,
                                                                }
                                                            ),
                                                        ],
                                                    }),
                                                    Object(r.jsxs)("div", {
                                                        className: "form-field",
                                                        children: [
                                                            Object(r.jsx)(
                                                                "label",
                                                                {
                                                                    htmlFor:
                                                                        "email",
                                                                    children:
                                                                        "Email",
                                                                }
                                                            ),
                                                            Object(r.jsx)(
                                                                "input",
                                                                {
                                                                    type: "text",
                                                                    id: "email",
                                                                    value: s,
                                                                    onChange:
                                                                        function (
                                                                            e
                                                                        ) {
                                                                            return o(
                                                                                e
                                                                                    .target
                                                                                    .value
                                                                            );
                                                                        },
                                                                    required:
                                                                        !0,
                                                                }
                                                            ),
                                                        ],
                                                    }),
                                                    Object(r.jsx)("div", {
                                                        className:
                                                            "d-flex justify-content-center align-items-center",
                                                        style: {
                                                            maxWidth: "400px",
                                                        },
                                                        children: Object(
                                                            r.jsxs
                                                        )("button", {
                                                            onClick:
                                                                function () {
                                                                    if (
                                                                        !n ||
                                                                        !s
                                                                    )
                                                                        return window.alert(
                                                                            "name and email is required"
                                                                        );
                                                                    Ue.a
                                                                        .post(
                                                                            "https://halim-sakti.herokuapp.com/e-brochure-downloads",
                                                                            {
                                                                                name: n,
                                                                                email: s,
                                                                            }
                                                                        )
                                                                        .then(
                                                                            function (
                                                                                e
                                                                            ) {
                                                                                o(
                                                                                    ""
                                                                                ),
                                                                                    a(
                                                                                        ""
                                                                                    ),
                                                                                    window.open(
                                                                                        "/Hamil Sakti Brochure.pdf",
                                                                                        "_blank"
                                                                                    );
                                                                            }
                                                                        )
                                                                        .catch(
                                                                            function (
                                                                                e,
                                                                                t
                                                                            ) {
                                                                                console.log(
                                                                                    e,
                                                                                    t
                                                                                ),
                                                                                    window.alert(
                                                                                        e
                                                                                    );
                                                                            }
                                                                        );
                                                                },
                                                            children: [
                                                                Object(r.jsx)(
                                                                    We.a,
                                                                    {}
                                                                ),
                                                                " ",
                                                                l(
                                                                    "downloadBrochure"
                                                                ),
                                                            ],
                                                        }),
                                                    }),
                                                ],
                                            }),
                                        }),
                                    ],
                                }),
                            }),
                        }),
                    });
                },
                Qe = n("o0o1"),
                Ye = n.n(Qe);
            function Xe(e, t, n, r, a, i, s) {
                try {
                    var o = e[i](s),
                        c = o.value;
                } catch (l) {
                    return void n(l);
                }
                o.done ? t(c) : Promise.resolve(c).then(r, a);
            }
            var Ze = function (e) {
                    var t = Object(c.useState)(""),
                        n = t[0],
                        a = t[1],
                        i = Object(c.useState)(""),
                        s = i[0],
                        o = i[1],
                        l = Object(c.useState)(""),
                        d = l[0],
                        u = l[1],
                        h = Object(c.useState)(""),
                        m = h[0],
                        f = h[1],
                        p = Object(c.useState)("jakarta"),
                        b = p[0],
                        j = p[1],
                        g = Object(Ae.a)("common").t,
                        v = (function () {
                            var e,
                                t =
                                    ((e = Ye.a.mark(function e(t) {
                                        return Ye.a.wrap(
                                            function (e) {
                                                for (;;)
                                                    switch ((e.prev = e.next)) {
                                                        case 0:
                                                            return (
                                                                t.preventDefault(),
                                                                (n &&
                                                                    s &&
                                                                    d &&
                                                                    m) ||
                                                                    window.alert(
                                                                        "Please fill all the field."
                                                                    ),
                                                                (e.prev = 2),
                                                                (e.next = 5),
                                                                Ue.a.post(
                                                                    "https://halim-sakti.herokuapp.com/inboxes",
                                                                    {
                                                                        name: n,
                                                                        email: s,
                                                                        phone: d,
                                                                        message:
                                                                            m,
                                                                    }
                                                                )
                                                            );
                                                        case 5:
                                                            e.sent &&
                                                                window.alert(
                                                                    "Thank You! Message has been sent!"
                                                                ),
                                                                (e.next = 12);
                                                            break;
                                                        case 9:
                                                            (e.prev = 9),
                                                                (e.t0 =
                                                                    e.catch(2)),
                                                                console.log(
                                                                    e.t0
                                                                );
                                                        case 12:
                                                        case "end":
                                                            return e.stop();
                                                    }
                                            },
                                            e,
                                            null,
                                            [[2, 9]]
                                        );
                                    })),
                                    function () {
                                        var t = this,
                                            n = arguments;
                                        return new Promise(function (r, a) {
                                            var i = e.apply(t, n);
                                            function s(e) {
                                                Xe(i, r, a, s, o, "next", e);
                                            }
                                            function o(e) {
                                                Xe(i, r, a, s, o, "throw", e);
                                            }
                                            s(void 0);
                                        });
                                    });
                            return function (e) {
                                return t.apply(this, arguments);
                            };
                        })();
                    return Object(r.jsx)(r.Fragment, {
                        children: Object(r.jsx)("div", {
                            id: "contact-us",
                            children: Object(r.jsxs)("div", {
                                className: "wrapper",
                                children: [
                                    Object(r.jsx)("h1", {
                                        className: "section-title",
                                        children: g("contactSectionTitle"),
                                    }),
                                    Object(r.jsxs)("div", {
                                        className: "row",
                                        children: [
                                            Object(r.jsx)("div", {
                                                className: "col-md-5 left",
                                                children: Object(r.jsxs)(
                                                    "form",
                                                    {
                                                        className:
                                                            "form-contact",
                                                        onSubmit: v,
                                                        children: [
                                                            Object(r.jsxs)(
                                                                "div",
                                                                {
                                                                    className:
                                                                        "form-field",
                                                                    children: [
                                                                        Object(
                                                                            r.jsx
                                                                        )(
                                                                            "label",
                                                                            {
                                                                                htmlFor:
                                                                                    "name",
                                                                                children:
                                                                                    g(
                                                                                        "formSection.name"
                                                                                    ),
                                                                            }
                                                                        ),
                                                                        Object(
                                                                            r.jsx
                                                                        )(
                                                                            "input",
                                                                            {
                                                                                type: "text",
                                                                                id: "name",
                                                                                value: n,
                                                                                onChange:
                                                                                    function (
                                                                                        e
                                                                                    ) {
                                                                                        return a(
                                                                                            e
                                                                                                .target
                                                                                                .value
                                                                                        );
                                                                                    },
                                                                                required:
                                                                                    !0,
                                                                            }
                                                                        ),
                                                                    ],
                                                                }
                                                            ),
                                                            Object(r.jsxs)(
                                                                "div",
                                                                {
                                                                    className:
                                                                        "form-field",
                                                                    children: [
                                                                        Object(
                                                                            r.jsx
                                                                        )(
                                                                            "label",
                                                                            {
                                                                                htmlFor:
                                                                                    "email",
                                                                                children:
                                                                                    g(
                                                                                        "formSection.email"
                                                                                    ),
                                                                            }
                                                                        ),
                                                                        Object(
                                                                            r.jsx
                                                                        )(
                                                                            "input",
                                                                            {
                                                                                type: "text",
                                                                                id: "email",
                                                                                value: s,
                                                                                onChange:
                                                                                    function (
                                                                                        e
                                                                                    ) {
                                                                                        return o(
                                                                                            e
                                                                                                .target
                                                                                                .value
                                                                                        );
                                                                                    },
                                                                                required:
                                                                                    !0,
                                                                            }
                                                                        ),
                                                                    ],
                                                                }
                                                            ),
                                                            Object(r.jsxs)(
                                                                "div",
                                                                {
                                                                    className:
                                                                        "form-field",
                                                                    children: [
                                                                        Object(
                                                                            r.jsx
                                                                        )(
                                                                            "label",
                                                                            {
                                                                                htmlFor:
                                                                                    "phone",
                                                                                children:
                                                                                    g(
                                                                                        "formSection.phone"
                                                                                    ),
                                                                            }
                                                                        ),
                                                                        Object(
                                                                            r.jsx
                                                                        )(
                                                                            "input",
                                                                            {
                                                                                type: "text",
                                                                                id: "phone",
                                                                                value: d,
                                                                                onChange:
                                                                                    function (
                                                                                        e
                                                                                    ) {
                                                                                        return u(
                                                                                            e
                                                                                                .target
                                                                                                .value
                                                                                        );
                                                                                    },
                                                                                required:
                                                                                    !0,
                                                                            }
                                                                        ),
                                                                    ],
                                                                }
                                                            ),
                                                            Object(r.jsxs)(
                                                                "div",
                                                                {
                                                                    className:
                                                                        "form-field",
                                                                    children: [
                                                                        Object(
                                                                            r.jsx
                                                                        )(
                                                                            "label",
                                                                            {
                                                                                htmlFor:
                                                                                    "message",
                                                                                children:
                                                                                    g(
                                                                                        "formSection.message"
                                                                                    ),
                                                                            }
                                                                        ),
                                                                        Object(
                                                                            r.jsx
                                                                        )(
                                                                            "textarea",
                                                                            {
                                                                                type: "text",
                                                                                id: "message",
                                                                                rows: "4",
                                                                                value: m,
                                                                                onChange:
                                                                                    function (
                                                                                        e
                                                                                    ) {
                                                                                        return f(
                                                                                            e
                                                                                                .target
                                                                                                .value
                                                                                        );
                                                                                    },
                                                                                required:
                                                                                    !0,
                                                                            }
                                                                        ),
                                                                    ],
                                                                }
                                                            ),
                                                            Object(r.jsx)(
                                                                "div",
                                                                {
                                                                    className:
                                                                        "form-button",
                                                                    children:
                                                                        Object(
                                                                            r.jsx
                                                                        )(
                                                                            "button",
                                                                            {
                                                                                type: "submit",
                                                                                children:
                                                                                    "Submit",
                                                                            }
                                                                        ),
                                                                }
                                                            ),
                                                        ],
                                                    }
                                                ),
                                            }),
                                            Object(r.jsxs)("div", {
                                                className: "col-md-7 right",
                                                children: [
                                                    Object(r.jsxs)("select", {
                                                        name: "map",
                                                        id: "map",
                                                        onChange: function (e) {
                                                            return j(
                                                                e.target.value
                                                            );
                                                        },
                                                        children: [
                                                            Object(r.jsx)(
                                                                "option",
                                                                {
                                                                    value: "jakarta",
                                                                    children:
                                                                        g(
                                                                            "branch.jakarta"
                                                                        ),
                                                                }
                                                            ),
                                                            Object(r.jsx)(
                                                                "option",
                                                                {
                                                                    value: "medan",
                                                                    children:
                                                                        g(
                                                                            "branch.medan"
                                                                        ),
                                                                }
                                                            ),
                                                            Object(r.jsx)(
                                                                "option",
                                                                {
                                                                    value: "surabaya",
                                                                    children:
                                                                        g(
                                                                            "branch.surabaya"
                                                                        ),
                                                                }
                                                            ),
                                                        ],
                                                    }),
                                                    Object(r.jsxs)("div", {
                                                        className:
                                                            "address-detail",
                                                        children: [
                                                            "jakarta" === b
                                                                ? Object(
                                                                      r.jsxs
                                                                  )("div", {
                                                                      id: "address-jakarta",
                                                                      children:
                                                                          [
                                                                              Object(
                                                                                  r.jsx
                                                                              )(
                                                                                  "iframe",
                                                                                  {
                                                                                      src: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.555874538331!2d106.7973903!3d-6.1790569!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x532d280267fa3c13!2sPT.%20Halim%20Sakti%20Pratama!5e0!3m2!1sid!2sid!4v1623870988506!5m2!1sid!2sid",
                                                                                      width: "100%",
                                                                                      height: "320",
                                                                                      style: {
                                                                                          border: 0,
                                                                                      },
                                                                                      allowFullScreen:
                                                                                          "",
                                                                                      loading:
                                                                                          "lazy",
                                                                                  }
                                                                              ),
                                                                              Object(
                                                                                  r.jsx
                                                                              )(
                                                                                  "div",
                                                                                  {
                                                                                      className:
                                                                                          "info mt-3",
                                                                                      children:
                                                                                          Object(
                                                                                              r.jsxs
                                                                                          )(
                                                                                              "p",
                                                                                              {
                                                                                                  children:
                                                                                                      [
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "b",
                                                                                                              {
                                                                                                                  children:
                                                                                                                      "Jl. Tomang Raya No. 4 Jakarta 11430, Indonesia",
                                                                                                              }
                                                                                                          ),
                                                                                                          " ",
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "br",
                                                                                                              {}
                                                                                                          ),
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "b",
                                                                                                              {
                                                                                                                  children:
                                                                                                                      "Telp\u2003\u2003:",
                                                                                                              }
                                                                                                          ),
                                                                                                          " (6221) 5600400 - 5660708 ",
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "br",
                                                                                                              {}
                                                                                                          ),
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "b",
                                                                                                              {
                                                                                                                  children:
                                                                                                                      "Fax.\u2003\u2003:",
                                                                                                              }
                                                                                                          ),
                                                                                                          " (6221) 5600390, 5667440, 5637846 ",
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "br",
                                                                                                              {}
                                                                                                          ),
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "b",
                                                                                                              {
                                                                                                                  children:
                                                                                                                      "e-mail\u2003:",
                                                                                                              }
                                                                                                          ),
                                                                                                          " hsp@halim-sakti.com",
                                                                                                      ],
                                                                                              }
                                                                                          ),
                                                                                  }
                                                                              ),
                                                                          ],
                                                                  })
                                                                : null,
                                                            "medan" === b
                                                                ? Object(
                                                                      r.jsxs
                                                                  )("div", {
                                                                      id: "address-medan",
                                                                      children:
                                                                          [
                                                                              Object(
                                                                                  r.jsx
                                                                              )(
                                                                                  "iframe",
                                                                                  {
                                                                                      src: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15928.095543592355!2d98.6884663!3d3.5819878!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe9d178ff6c784ad!2sHalim%20Sejahtera%20Cipta%20Mandiri.%20PT!5e0!3m2!1sid!2sid!4v1623871858478!5m2!1sid!2sid",
                                                                                      width: "100%",
                                                                                      height: "320",
                                                                                      style: {
                                                                                          border: 0,
                                                                                      },
                                                                                      allowFullScreen:
                                                                                          "",
                                                                                      loading:
                                                                                          "lazy",
                                                                                  }
                                                                              ),
                                                                              Object(
                                                                                  r.jsx
                                                                              )(
                                                                                  "div",
                                                                                  {
                                                                                      className:
                                                                                          "info mt-3",
                                                                                      children:
                                                                                          Object(
                                                                                              r.jsxs
                                                                                          )(
                                                                                              "p",
                                                                                              {
                                                                                                  children:
                                                                                                      [
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "b",
                                                                                                              {
                                                                                                                  children:
                                                                                                                      "Jl. Yose Rizal No. 1 EE, Medan 20214, Indonesia",
                                                                                                              }
                                                                                                          ),
                                                                                                          " ",
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "br",
                                                                                                              {}
                                                                                                          ),
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "b",
                                                                                                              {
                                                                                                                  children:
                                                                                                                      "Telp\u2003\u2003:",
                                                                                                              }
                                                                                                          ),
                                                                                                          " (62-61) 7345292, 7345293 ",
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "br",
                                                                                                              {}
                                                                                                          ),
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "b",
                                                                                                              {
                                                                                                                  children:
                                                                                                                      "Fax.\u2003\u2003:",
                                                                                                              }
                                                                                                          ),
                                                                                                          " (62-61) 7345287 ",
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "br",
                                                                                                              {}
                                                                                                          ),
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "b",
                                                                                                              {
                                                                                                                  children:
                                                                                                                      "e-mail\u2003:",
                                                                                                              }
                                                                                                          ),
                                                                                                          " hscm@halim-sakti.com",
                                                                                                      ],
                                                                                              }
                                                                                          ),
                                                                                  }
                                                                              ),
                                                                          ],
                                                                  })
                                                                : null,
                                                            "surabaya" === b
                                                                ? Object(
                                                                      r.jsxs
                                                                  )("div", {
                                                                      id: "address-surabaya",
                                                                      children:
                                                                          [
                                                                              Object(
                                                                                  r.jsx
                                                                              )(
                                                                                  "iframe",
                                                                                  {
                                                                                      src: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.407506496891!2d112.6984532!3d-7.2860565!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89c9de758abf1824!2sPT.%20Halim%20Sarana%20Cahaya%20Semesta!5e0!3m2!1sid!2sid!4v1623871919324!5m2!1sid!2sid",
                                                                                      width: "100%",
                                                                                      height: "320",
                                                                                      style: {
                                                                                          border: 0,
                                                                                      },
                                                                                      allowFullScreen:
                                                                                          "",
                                                                                      loading:
                                                                                          "lazy",
                                                                                  }
                                                                              ),
                                                                              Object(
                                                                                  r.jsx
                                                                              )(
                                                                                  "div",
                                                                                  {
                                                                                      className:
                                                                                          "info mt-3",
                                                                                      children:
                                                                                          Object(
                                                                                              r.jsxs
                                                                                          )(
                                                                                              "p",
                                                                                              {
                                                                                                  children:
                                                                                                      [
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "b",
                                                                                                              {
                                                                                                                  children:
                                                                                                                      "Gedung Halim Sakti, 6th & 7th floor, Jl. HR. Muhammad no. 41, Surabaya \u2013 60189, Indonesia",
                                                                                                              }
                                                                                                          ),
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "br",
                                                                                                              {}
                                                                                                          ),
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "b",
                                                                                                              {
                                                                                                                  children:
                                                                                                                      "Telp\u2003\u2003:",
                                                                                                              }
                                                                                                          ),
                                                                                                          " (62-31) 7388322, 7388333 ",
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "br",
                                                                                                              {}
                                                                                                          ),
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "b",
                                                                                                              {
                                                                                                                  children:
                                                                                                                      "Fax.\u2003\u2003:",
                                                                                                              }
                                                                                                          ),
                                                                                                          " (62-31) 7388329, 7388339 ",
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "br",
                                                                                                              {}
                                                                                                          ),
                                                                                                          Object(
                                                                                                              r.jsx
                                                                                                          )(
                                                                                                              "b",
                                                                                                              {
                                                                                                                  children:
                                                                                                                      "e-mail\u2003:",
                                                                                                              }
                                                                                                          ),
                                                                                                          " hscs@halim-sakti.com",
                                                                                                      ],
                                                                                              }
                                                                                          ),
                                                                                  }
                                                                              ),
                                                                          ],
                                                                  })
                                                                : null,
                                                        ],
                                                    }),
                                                ],
                                            }),
                                        ],
                                    }),
                                ],
                            }),
                        }),
                    });
                },
                et = !0;
            function tt(e) {
                return Object(r.jsx)(r.Fragment, {
                    children: Object(r.jsx)(Te.a, {
                        children: Object(r.jsxs)("div", {
                            id: "homepage",
                            children: [
                                e.banners[0]
                                    ? Object(r.jsx)(_e, { banners: e.banners })
                                    : null,
                                Object(r.jsx)(Ve, { aboutData: e.aboutData }),
                                Object(r.jsx)(Me, {
                                    whyMust: e.homeData.whymustlist,
                                }),
                                Object(r.jsx)(qe, { products: e.products }),
                                Object(r.jsx)(Ie, { testi: e.testi }),
                                Object(r.jsx)(Ke, { articles: e.articles }),
                                Object(r.jsx)(Be, {}),
                                Object(r.jsx)(Ze, {}),
                            ],
                        }),
                    }),
                });
            }
        },
        vlRD: function (e, t, n) {
            (window.__NEXT_P = window.__NEXT_P || []).push([
                "/",
                function () {
                    return n("RNiq");
                },
            ]);
        },
    },
    [["vlRD", 0, 2, 3, 5, 6, 1, 4, 7, 9]],
]);
