import React, { useEffect, useState } from "react";

export default function Home() {
    return (
        <>
            <div className="cs-slider cs-style1">
                <div
                    className="cs-slider_container"
                    data-autoplay="0"
                    data-loop="1"
                    data-speed="600"
                    data-center="0"
                    data-slides-per-view="1"
                >
                    <div className="cs-slider_wrapper">
                        <div className="cs-slide">
                            <div className="cs-hero">
                                <div
                                    className="cs-hero_img cs-bg"
                                    style={{
                                        backgroundImage: `url("assets_frontend/img/hero_img1.jpg")`,
                                    }}
                                ></div>
                                <div
                                    className="container wow fadeInLeft"
                                    data-wow-duration="1s"
                                    data-wow-delay="0.2s"
                                >
                                    <div className="cs-hero_text">
                                        <h1 className="cs-hero_title">
                                            Intel Core I9 For Gaming Beast
                                        </h1>
                                        <p className="cs-hero_subtitle">
                                            For Youtuber, Designer, Gaming &
                                            <br />
                                            Streaming Also Multitasking...
                                        </p>
                                        <div className="cs-hero_btn">
                                            <a
                                                href="#"
                                                className="cs-btn cs-style1"
                                            >
                                                <span>Shop Now</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="cs-pagination cs-style1"></div>
            </div>
            <div className="cs-height_20 cs-height_lg_20"></div>
            <div className="container">
                <ul className="cs-info_list cs-type1">
                    <li>
                        <div
                            className="cs-info cs-type1 wow fadeInLeft"
                            data-wow-duration="1s"
                            data-wow-delay="0.2s"
                        >
                            <div className="cs-info_icon">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="49"
                                    height="49"
                                    viewBox="0 0 49 49"
                                >
                                    <defs>
                                        <clipPath id="delivery-clip-path">
                                            <rect
                                                width="49"
                                                height="49"
                                                transform="translate(0.274 -0.322)"
                                                fill="#fff"
                                                stroke="#707070"
                                                stroke-width="1"
                                            />
                                        </clipPath>
                                    </defs>
                                    <g
                                        transform="translate(-0.274 0.322)"
                                        clip-path="url(#delivery-clip-path)"
                                    >
                                        <g transform="translate(0 4.333)">
                                            <g transform="translate(0 0)">
                                                <path
                                                    d="M48.016,31.983h-.143V25.66a.975.975,0,0,0-.077-.383L43.931,15.99a.969.969,0,0,0-.88-.593H36.643V9.955a3.078,3.078,0,0,0-3.08-3.08H17.552L17.6,8.788H33.563A1.172,1.172,0,0,1,34.73,9.955V31.983H3.013V9.964A1.172,1.172,0,0,1,4.18,8.8H21.043l.048-1.913H4.18A3.09,3.09,0,0,0,1.1,9.964V31.992H.956A.959.959,0,0,0,0,32.949V39.51a.959.959,0,0,0,.956.956H6.035a5.42,5.42,0,1,0,10.684,1.263,5.556,5.556,0,0,0-.143-1.263h17a5.42,5.42,0,1,0,10.684,1.263,5.556,5.556,0,0,0-.143-1.263h3.9a.959.959,0,0,0,.956-.956V32.949A.961.961,0,0,0,48.016,31.983ZM36.643,17.32h5.768l3.07,7.384H36.643Zm0,9.3h9.316v5.366H36.643ZM11.3,45.259a3.539,3.539,0,1,1,3.5-3.539A3.523,3.523,0,0,1,11.3,45.259Zm27.547,0a3.539,3.539,0,1,1,3.5-3.539,3.523,3.523,0,0,1-3.5,3.539Zm8.216-6.7H43.243a5.39,5.39,0,0,0-8.8,0H15.7a5.39,5.39,0,0,0-8.8,0H1.913V33.905H47.059Z"
                                                    transform="translate(0 -6.875)"
                                                    fill="#020288"
                                                />
                                            </g>
                                            <rect
                                                width="26.112"
                                                height="16.069"
                                                transform="translate(5.93 5.892)"
                                                fill="#ffbdbc"
                                            />
                                            <text
                                                transform="translate(8.852 15.789)"
                                                fill="#020288"
                                                font-size="7"
                                                font-family="SegoeUI-Bold, Segoe UI"
                                                font-weight="700"
                                            >
                                                <tspan x="0" y="0">
                                                    FREE
                                                </tspan>
                                            </text>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div className="cs-info_right">
                                <h3 className="cs-info_title">Free Delivery</h3>
                                <div className="cs-info_subtitle">
                                    For all oders over 200 AED
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div
                            className="cs-info cs-type1 wow fadeIn"
                            data-wow-duration="1s"
                            data-wow-delay="0.3s"
                        >
                            <div className="cs-info_icon">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="49"
                                    height="49"
                                    viewBox="0 0 49 49"
                                >
                                    <defs>
                                        <clipPath id="return-clip-path">
                                            <rect
                                                width="49"
                                                height="49"
                                                transform="translate(-0.065 -0.322)"
                                                fill="#fff"
                                                stroke="#707070"
                                                stroke-width="1"
                                            />
                                        </clipPath>
                                    </defs>
                                    <g
                                        transform="translate(0.065 0.322)"
                                        clip-path="url(#return-clip-path)"
                                    >
                                        <g transform="translate(0 1.543)">
                                            <g transform="translate(9.279 7.737)">
                                                <circle
                                                    cx="15.206"
                                                    cy="15.206"
                                                    r="15.206"
                                                    fill="#a4fcc4"
                                                />
                                            </g>
                                            <path
                                                d="M46.249,28.265a.957.957,0,0,0-1.119.756,21.035,21.035,0,0,1-41.171.622l.249.249a.939.939,0,0,0,.679.277.98.98,0,0,0,.679-.277.952.952,0,0,0,0-1.348L3.6,26.572a.947.947,0,0,0-.679-.277.988.988,0,0,0-.679.277L.277,28.542a.953.953,0,0,0,1.348,1.348l.354-.354A22.948,22.948,0,0,0,47,29.394.96.96,0,0,0,46.249,28.265Z"
                                                transform="translate(0.002 -2.08)"
                                                fill="#020288"
                                            />
                                            <path
                                                d="M48.728,19.637a.952.952,0,0,0-1.348,0l-.354.354A22.949,22.949,0,0,0,2,20.144a.955.955,0,0,0,1.874.363A21.036,21.036,0,0,1,45.046,19.9l-.249-.249A.953.953,0,1,0,43.449,21l1.97,1.97a.947.947,0,0,0,.679.277.988.988,0,0,0,.679-.277L48.748,21a.982.982,0,0,0-.019-1.358Z"
                                                transform="translate(-0.038 -1.572)"
                                                fill="#020288"
                                            />
                                            <path
                                                d="M10.974,29.1h.765a.956.956,0,0,0,0-1.913h-.765a.956.956,0,0,0,0,1.913Z"
                                                transform="translate(-0.204 -2.099)"
                                                fill="#020288"
                                            />
                                            <path
                                                d="M21.466,29.1a.956.956,0,1,0,0-1.913H15.661a.956.956,0,1,0,0,1.913Z"
                                                transform="translate(-0.3 -2.099)"
                                                fill="#020288"
                                            />
                                            <path
                                                d="M26.572,19.956H22.919l1.7-1.7a.953.953,0,0,0-1.348-1.348l-3.338,3.338a.952.952,0,0,0,0,1.348l3.338,3.338a.939.939,0,0,0,.679.277.98.98,0,0,0,.679-.277.952.952,0,0,0,0-1.348l-1.712-1.712h3.653a4.2,4.2,0,1,1,0,8.4H17.946a.956.956,0,0,0,0,1.913h8.626a6.111,6.111,0,1,0,0-12.222Z"
                                                transform="translate(-0.347 -1.881)"
                                                fill="#020288"
                                            />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div className="cs-info_right">
                                <h3 className="cs-info_title">7 Days Return</h3>
                                <div className="cs-info_subtitle">
                                    If goods have problems
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div
                            className="cs-info cs-type1 wow fadeIn"
                            data-wow-duration="1s"
                            data-wow-delay="0.3s"
                        >
                            <div className="cs-info_icon">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="49"
                                    height="49"
                                    viewBox="0 0 49 49"
                                >
                                    <defs>
                                        <clipPath id="secure-clip-path">
                                            <rect
                                                width="49"
                                                height="49"
                                                transform="translate(-0.364 -0.322)"
                                                fill="#fff"
                                                stroke="#707070"
                                                stroke-width="1"
                                            />
                                        </clipPath>
                                    </defs>
                                    <g
                                        transform="translate(0.364 0.322)"
                                        clip-path="url(#secure-clip-path)"
                                    >
                                        <g transform="translate(0 0.808)">
                                            <rect
                                                width="46.103"
                                                height="4.687"
                                                transform="translate(0.956 19.943)"
                                                fill="#e2c4ff"
                                            />
                                            <g transform="translate(0 0)">
                                                <g transform="translate(0 11.239)">
                                                    <path
                                                        d="M7.011,32.334a.959.959,0,0,0-.956.956v8.159a.959.959,0,0,0,.956.956H17.8a.959.959,0,0,0,.956-.956V33.29a.959.959,0,0,0-.956-.956H7.011Zm9.842,8.159H7.968V34.247h8.876v6.246Z"
                                                        transform="translate(-0.124 -12.716)"
                                                        fill="#020288"
                                                    />
                                                    <path
                                                        d="M48.972,16.638A4.325,4.325,0,0,0,44.658,12.3h-10.3l-.784.6c0,.172.784,1.148.765,1.31H44.649a2.406,2.406,0,0,1,2.4,2.42v2.879H31.832a13.334,13.334,0,0,1-2.458,1.913H47.059v3.74H1.913V21.43h18.91a13.023,13.023,0,0,1-2.458-1.913H1.913V16.638a2.419,2.419,0,0,1,2.4-2.42H15.859c-.01-.163,1.062-.88,1.062-1.052L15.849,12.3H4.314A4.325,4.325,0,0,0,0,16.638V44.089a4.325,4.325,0,0,0,4.314,4.333H44.649a4.325,4.325,0,0,0,4.314-4.333v-8.6l.01-18.852ZM47.059,35.6v8.484a2.419,2.419,0,0,1-2.4,2.42H4.314a2.406,2.406,0,0,1-2.4-2.42V27.073H47.059V35.6Z"
                                                        transform="translate(0 -12.305)"
                                                        fill="#020288"
                                                    />
                                                    <path
                                                        d="M38.3,31.934a5.433,5.433,0,1,0,5.414,5.423A5.431,5.431,0,0,0,38.3,31.934Zm0,8.943a3.52,3.52,0,1,1,3.5-3.52A3.513,3.513,0,0,1,38.3,40.877Z"
                                                        transform="translate(-0.676 -12.708)"
                                                        fill="#020288"
                                                    />
                                                </g>
                                                <g transform="translate(15.839)">
                                                    <path
                                                        d="M32.212,4.216A5.961,5.961,0,0,1,26.827.83H24.034a5.961,5.961,0,0,1-5.385,3.386,5.936,5.936,0,0,1-2.477-.536v9.794c0,7.164,9.259,9.6,9.259,9.6s9.259-2.449,9.259-9.6V3.68a5.968,5.968,0,0,1-2.477.536Z"
                                                        transform="translate(-16.172 -0.83)"
                                                        fill="#b2f0fb"
                                                    />
                                                    <path
                                                        d="M25.256,15.06a.963.963,0,0,1-.679-.277l-1.712-1.7a.954.954,0,1,1,1.349-1.349l.976.966,2.745-3.262A.957.957,0,0,1,29.4,10.67l-3.405,4.056a.954.954,0,0,1-.689.335Z"
                                                        transform="translate(-16.304 -1)"
                                                        fill="#020288"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div className="cs-info_right">
                                <h3 className="cs-info_title">
                                    Secure Payment
                                </h3>
                                <div className="cs-info_subtitle">
                                    100% secure payment
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div
                            className="cs-info cs-type1 wow fadeIn"
                            data-wow-duration="1s"
                            data-wow-delay="0.3s"
                        >
                            <div className="cs-info_icon">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="49"
                                    height="49"
                                    viewBox="0 0 49 49"
                                >
                                    <defs>
                                        <clipPath id="support-clip-path">
                                            <rect
                                                width="49"
                                                height="49"
                                                transform="translate(0.44 -0.322)"
                                                fill="#fff"
                                                stroke="#707070"
                                                stroke-width="1"
                                            />
                                        </clipPath>
                                    </defs>
                                    <g
                                        transform="translate(-0.44 0.322)"
                                        clip-path="url(#support-clip-path)"
                                    >
                                        <g transform="translate(0 0.243)">
                                            <g transform="translate(12.056 0)">
                                                <path
                                                    d="M28.21.248a20.975,20.975,0,0,0-15.9,7.268A5.8,5.8,0,0,1,13.8,8.6l2.71,2.717a15.344,15.344,0,1,1,21.6,21.651l2.177,2.183a5.789,5.789,0,0,1,1.384,2.222A20.994,20.994,0,0,0,28.21.248Z"
                                                    transform="translate(-12.309 -0.248)"
                                                    fill="#b2f0fb"
                                                />
                                            </g>
                                            <g transform="translate(0 5.691)">
                                                <path
                                                    d="M40.709,34.593,37.584,31.46a6.524,6.524,0,0,0-9.248,0l-2.823,2.832L14.524,23.278l2.826-2.836a6.571,6.571,0,0,0,0-9.265L14.226,8.043a6.742,6.742,0,0,0-9.556,0,.952.952,0,0,0-.074.083l-1.53,1.941A14.326,14.326,0,0,0,.211,16.438,13.967,13.967,0,0,0,.757,23.4a9.6,9.6,0,0,0,2.078,3.667L21.753,46.03a8.58,8.58,0,0,0,2.722,1.729,13.674,13.674,0,0,0,5.377,1.1,14.11,14.11,0,0,0,8.587-2.931l2.176-1.672a.951.951,0,0,0,.095-.083,6.791,6.791,0,0,0,0-9.575ZM39.4,42.774l-2.124,1.632A12.048,12.048,0,0,1,25.226,46a6.726,6.726,0,0,1-2.119-1.32L4.19,25.716a7.781,7.781,0,0,1-1.624-2.941,12.141,12.141,0,0,1,2-11.523L6.062,9.357a4.829,4.829,0,0,1,6.809.038L16,12.528a4.655,4.655,0,0,1,0,6.564L12.5,22.6a.957.957,0,0,0,0,1.351L24.837,36.322a.956.956,0,0,0,1.355,0l3.5-3.511a4.611,4.611,0,0,1,6.539,0l3.125,3.134A4.875,4.875,0,0,1,39.4,42.774Z"
                                                    transform="translate(0 -6.058)"
                                                    fill="#020288"
                                                />
                                                <g transform="translate(21.475 9.349)">
                                                    <path
                                                        d="M35.125,21.527h-.107c.012-2.013.018-4.164-.007-4.463a1.553,1.553,0,0,0-1.033-1.4,1.494,1.494,0,0,0-1.609.588c-.476.587-2.674,4.567-3.337,5.772a.957.957,0,0,0,.838,1.417h3.222c0,.537-.008,1.051-.012,1.515a.956.956,0,0,0,.948.965h.008a.956.956,0,0,0,.956-.948c0-.287.007-.842.012-1.532h.12a.957.957,0,0,0,0-1.913Zm-2.021,0H31.492c.6-1.074,1.181-2.1,1.623-2.864C33.114,19.447,33.11,20.468,33.1,21.527Z"
                                                        transform="translate(-22.07 -15.603)"
                                                        fill="#020288"
                                                    />
                                                    <path
                                                        d="M27.467,24.276c-.841.011-1.734.018-2.474.019.465-.624,1.111-1.511,1.985-2.765a6.4,6.4,0,0,0,1.037-2.156,3.356,3.356,0,0,0,.066-.54,3.1,3.1,0,0,0-6.137-.6.956.956,0,1,0,1.877.367,1.184,1.184,0,0,1,2.346.181l-.026.2a4.661,4.661,0,0,1-.732,1.45c-1.325,1.9-2.116,2.942-2.541,3.5-.525.69-.765,1.005-.6,1.534a1,1,0,0,0,.646.655,6.95,6.95,0,0,0,1.877.084c.639,0,1.509-.006,2.7-.021a.957.957,0,0,0-.024-1.913Z"
                                                        transform="translate(-21.926 -15.606)"
                                                        fill="#020288"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div className="cs-info_right">
                                <h3 className="cs-info_title">24/7 Support</h3>
                                <div className="cs-info_subtitle">
                                    Dedicated support
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div
                            className="cs-info cs-type1 wow fadeInRight"
                            data-wow-duration="1s"
                            data-wow-delay="0.2s"
                        >
                            <div className="cs-info_icon">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="49"
                                    height="49"
                                    viewBox="0 0 49 49"
                                >
                                    <defs>
                                        <clipPath id="gift-clip-path">
                                            <rect
                                                width="49"
                                                height="49"
                                                transform="translate(-0.208 -0.322)"
                                                fill="#fff"
                                                stroke="#707070"
                                                stroke-width="1"
                                            />
                                        </clipPath>
                                    </defs>
                                    <g
                                        transform="translate(0.208 0.322)"
                                        clip-path="url(#gift-clip-path)"
                                    >
                                        <g transform="translate(4.324 0)">
                                            <g transform="translate(15.542 19.293)">
                                                <path
                                                    d="M20.282,19.7h9.239V48.419H20.282V19.7Z"
                                                    transform="translate(-20.282 -19.697)"
                                                    fill="#e2c4ff"
                                                />
                                            </g>
                                            <g transform="translate(0 0)">
                                                <path
                                                    d="M43.782,10.244H40.558A16.921,16.921,0,0,0,40.2,4.161,5.375,5.375,0,0,0,36.656.191C36.446.124,31.338-1.3,26.68,4.734A.955.955,0,1,0,28.191,5.9c3.8-4.916,7.7-3.941,7.919-3.883a3.625,3.625,0,0,1,2.248,2.649,15.85,15.85,0,0,1,.191,6.207c-.163,1.119-.689,3.07-2.449,3.6-.038.01-4.046,1.129-7.91-3.883a.547.547,0,0,0-.067-.077L30.917,11.7a1.04,1.04,0,0,0,.373.077.956.956,0,0,0,.373-1.836L28.631,8.646l3.032-1.291a.956.956,0,1,0-.746-1.76L27.206,7.173A.951.951,0,0,0,26.7,8.426a1.041,1.041,0,0,0,.134.22,1.222,1.222,0,0,0-.134.22.948.948,0,0,0,.507,1.253l.22.1a.957.957,0,0,0-.756,1.54,14.274,14.274,0,0,0,2.573,2.621v3.95H19.889v-3.95a14.274,14.274,0,0,0,2.573-2.621.957.957,0,0,0-.756-1.54l.22-.1a.951.951,0,0,0,.507-1.253,1.041,1.041,0,0,0-.134-.22,1.222,1.222,0,0,0,.134-.22.948.948,0,0,0-.507-1.253L18.216,5.6a.956.956,0,0,0-.746,1.76L20.5,8.646l-3.022,1.3a.956.956,0,0,0,.373,1.836,1.04,1.04,0,0,0,.373-.077l2.793-1.186c-.019.029-.048.048-.067.077-3.8,4.916-7.7,3.941-7.919,3.883-1.75-.536-2.286-2.487-2.439-3.6a15.842,15.842,0,0,1,.191-6.207,3.646,3.646,0,0,1,2.248-2.649c.038-.01,4.046-1.129,7.91,3.883a.955.955,0,0,0,1.511-1.167C17.814-1.3,12.706.124,12.486.191A5.376,5.376,0,0,0,8.938,4.161a16.921,16.921,0,0,0-.354,6.083H5.37a.959.959,0,0,0-.956.956v8.092a.959.959,0,0,0,.956.956H6.575V48.014a.959.959,0,0,0,.956.956H41.62a.959.959,0,0,0,.956-.956V20.248h1.205a.959.959,0,0,0,.956-.956V11.2a.959.959,0,0,0-.956-.956ZM6.327,12.156H8.9a5.488,5.488,0,0,0,3.6,4.161,6.2,6.2,0,0,0,1.626.191,8.807,8.807,0,0,0,3.864-.918v2.755H6.327Zm34.337,34.9H8.488V20.248H40.663Zm2.162-28.722H31.166V15.581a8.807,8.807,0,0,0,3.864.918,6.2,6.2,0,0,0,1.626-.191,5.478,5.478,0,0,0,3.587-4.161h2.573Z"
                                                    transform="translate(-4.414 0.002)"
                                                    fill="#020288"
                                                />
                                                <g transform="translate(15.992 4.239)">
                                                    <path
                                                        d="M25.916,12.513H23.859A3.125,3.125,0,0,1,20.741,9.4V7.444a3.131,3.131,0,0,1,3.118-3.118h2.056a3.125,3.125,0,0,1,3.118,3.118V9.4A3.119,3.119,0,0,1,25.916,12.513Z"
                                                        transform="translate(-20.741 -4.326)"
                                                        fill="#ffbdbc"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div className="cs-info_right">
                                <h3 className="cs-info_title">Gift Service</h3>
                                <div className="cs-info_subtitle">
                                    Support gift service
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div className="cs-height_60 cs-height_lg_60"></div>
            <div className="container">
                <div className="row">
                    <div className="col-lg-4 col-sm-6">
                        <a
                            href="#"
                            className="cs-category cs-style1 wow fadeIn"
                            data-wow-duration="1s"
                            data-wow-delay="0.2s"
                        >
                            <img
                                src="assets_frontend/img/categories/category1.jpg"
                                alt=""
                                className="cs-category_img"
                            />
                            <h2 className="category_title">Components</h2>
                        </a>
                    </div>
                    <div className="col-lg-4 col-sm-6">
                        <a
                            href="#"
                            className="cs-category cs-style1 wow fadeIn"
                            data-wow-duration="1s"
                            data-wow-delay="0.25s"
                        >
                            <img
                                src="assets_frontend/img/categories/category2.jpg"
                                alt=""
                                className="cs-category_img"
                            />
                            <h2 className="category_title">Gaming PC</h2>
                        </a>
                    </div>
                    <div className="col-lg-4 col-sm-6">
                        <a
                            href="#"
                            className="cs-category cs-style1 wow fadeIn"
                            data-wow-duration="1s"
                            data-wow-delay="0.3s"
                        >
                            <img
                                src="assets_frontend/img/categories/category3.jpg"
                                alt=""
                                className="cs-category_img"
                            />
                            <h2 className="category_title">Networking</h2>
                        </a>
                    </div>
                    <div className="col-lg-4 col-sm-6">
                        <a
                            href="#"
                            className="cs-category cs-style1 wow fadeIn"
                            data-wow-duration="1s"
                            data-wow-delay="0.35s"
                        >
                            <img
                                src="assets_frontend/img/categories/category4.jpg"
                                alt=""
                                className="cs-category_img"
                            />
                            <h2 className="category_title">
                                Laptop, Desktop & AIO
                            </h2>
                        </a>
                    </div>
                    <div className="col-lg-4 col-sm-6">
                        <a
                            href="#"
                            className="cs-category cs-style1 wow fadeIn"
                            data-wow-duration="1s"
                            data-wow-delay="0.4s"
                        >
                            <img
                                src="assets_frontend/img/categories/category5.jpg"
                                alt=""
                                className="cs-category_img"
                            />
                            <h2 className="category_title">
                                Printer & Supplies
                            </h2>
                        </a>
                    </div>
                    <div className="col-lg-4 col-sm-6">
                        <a
                            href="#"
                            className="cs-category cs-style1 wow fadeIn"
                            data-wow-duration="1s"
                            data-wow-delay="0.45s"
                        >
                            <img
                                src="assets_frontend/img/categories/category6.jpg"
                                alt=""
                                className="cs-category_img"
                            />
                            <h2 className="category_title">
                                Sever & Workstations
                            </h2>
                        </a>
                    </div>
                </div>
            </div>
            <div className="container">
                <div className="row">
                    <div className="col-lg-6">
                        <div className="cs-left_full_width cs-space_85">
                            <div
                                className="cs-image_box cs-style1 cs-bg  wow fadeInLeft"
                                data-wow-duration="1s"
                                data-wow-delay="0.2s"
                                style={{
                                    backgroundImage: `url("assets_frontend/img/motherboard.png")`,
                                }}
                            ></div>
                        </div>
                    </div>
                    <div className="col-lg-6">
                        <div className="cs-vertical_middle">
                            <div className="cs-vertical_middle_in">
                                <div className="cs-text_box cs-style1">
                                    <h3 className="cs-text_box_subtitle">
                                        Motherboard
                                    </h3>
                                    <h2 className="cs-text_box_titel">
                                        Connect with the world{" "}
                                        <span className="cs-accent_color">
                                            Get work done faster
                                        </span>
                                    </h2>
                                    <div className="cs-text_box_text">
                                        to spread technological happiness by
                                        sharing every information essential.
                                        Dreaming to make a colorful
                                        technological world piece by create an
                                        easy supply chain for quality IT
                                        products. For that blumen planned to
                                        keep maintaining supply world top brands
                                        of IT parts & software reach to the
                                        end-users.{" "}
                                    </div>
                                    <div className="cs-text_box_brand">
                                        <h4 className="cs-text_box_brand_title">
                                            Brand
                                        </h4>
                                        <div className="cs-text_box_brands">
                                            <img
                                                src="assets/img/brands/gigabyte.svg"
                                                alt=""
                                            />
                                            <img
                                                src="assets/img/brands/asus.svg"
                                                alt=""
                                            />
                                            <img
                                                src="assets/img/brands/msi-logo.svg"
                                                alt=""
                                            />
                                            <img
                                                src="assets/img/brands/biostar.svg"
                                                alt=""
                                            />
                                            <img
                                                src="assets/img/brands/asrock-seeklogo.svg"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="cs-height_100 cs-height_lg_60"></div>
        </>
    );
}
