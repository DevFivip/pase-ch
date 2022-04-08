<!DOCTYPE html>
<html class="md device-pixel-ratio-1 device-desktop device-windows">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy"
        content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap: content: worker-src: blob:;">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
    <meta name="theme-color" content="#007aff">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Scan</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon" href="static/icons/apple-touch-icon.png">
    <link rel="icon" href="../images/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>


    <link href="../css/framework7.css" rel="stylesheet">
    {{-- <link href="../css/base.css" rel="stylesheet"> --}}
    <link href="../css/thema.css" rel="stylesheet">

    <script type="text/javascript" src="../js/utils.js"></script>

    <style type="text/css">
        svg:not(:root).svg-inline--fa {
            overflow: visible;
        }

        .svg-inline--fa {
            display: inline-block;
            font-size: inherit;
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }

        .svg-inline--fa.fa-lg {
            vertical-align: -0.225em;
        }

        .svg-inline--fa.fa-w-1 {
            width: 0.0625em;
        }

        .svg-inline--fa.fa-w-2 {
            width: 0.125em;
        }

        .svg-inline--fa.fa-w-3 {
            width: 0.1875em;
        }

        .svg-inline--fa.fa-w-4 {
            width: 0.25em;
        }

        .svg-inline--fa.fa-w-5 {
            width: 0.3125em;
        }

        .svg-inline--fa.fa-w-6 {
            width: 0.375em;
        }

        .svg-inline--fa.fa-w-7 {
            width: 0.4375em;
        }

        .svg-inline--fa.fa-w-8 {
            width: 0.5em;
        }

        .svg-inline--fa.fa-w-9 {
            width: 0.5625em;
        }

        .svg-inline--fa.fa-w-10 {
            width: 0.625em;
        }

        .svg-inline--fa.fa-w-11 {
            width: 0.6875em;
        }

        .svg-inline--fa.fa-w-12 {
            width: 0.75em;
        }

        .svg-inline--fa.fa-w-13 {
            width: 0.8125em;
        }

        .svg-inline--fa.fa-w-14 {
            width: 0.875em;
        }

        .svg-inline--fa.fa-w-15 {
            width: 0.9375em;
        }

        .svg-inline--fa.fa-w-16 {
            width: 1em;
        }

        .svg-inline--fa.fa-w-17 {
            width: 1.0625em;
        }

        .svg-inline--fa.fa-w-18 {
            width: 1.125em;
        }

        .svg-inline--fa.fa-w-19 {
            width: 1.1875em;
        }

        .svg-inline--fa.fa-w-20 {
            width: 1.25em;
        }

        .svg-inline--fa.fa-pull-left {
            margin-right: 0.3em;
            width: auto;
        }

        .svg-inline--fa.fa-pull-right {
            margin-left: 0.3em;
            width: auto;
        }

        .svg-inline--fa.fa-border {
            height: 1.5em;
        }

        .svg-inline--fa.fa-li {
            width: 2em;
        }

        .svg-inline--fa.fa-fw {
            width: 1.25em;
        }

        .fa-layers svg.svg-inline--fa {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .fa-layers {
            display: inline-block;
            height: 1em;
            position: relative;
            text-align: center;
            vertical-align: -0.125em;
            width: 1em;
        }

        .fa-layers svg.svg-inline--fa {
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-counter,
        .fa-layers-text {
            display: inline-block;
            position: absolute;
            text-align: center;
        }

        .fa-layers-text {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-counter {
            background-color: #ff253a;
            border-radius: 1em;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: #fff;
            height: 1.5em;
            line-height: 1;
            max-width: 5em;
            min-width: 1.5em;
            overflow: hidden;
            padding: 0.25em;
            right: 0;
            text-overflow: ellipsis;
            top: 0;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-bottom-right {
            bottom: 0;
            right: 0;
            top: auto;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right;
        }

        .fa-layers-bottom-left {
            bottom: 0;
            left: 0;
            right: auto;
            top: auto;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: bottom left;
            transform-origin: bottom left;
        }

        .fa-layers-top-right {
            right: 0;
            top: 0;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-top-left {
            left: 0;
            right: auto;
            top: 0;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: top left;
            transform-origin: top left;
        }

        .fa-lg {
            font-size: 1.3333333333em;
            line-height: 0.75em;
            vertical-align: -0.0667em;
        }

        .fa-xs {
            font-size: 0.75em;
        }

        .fa-sm {
            font-size: 0.875em;
        }

        .fa-1x {
            font-size: 1em;
        }

        .fa-2x {
            font-size: 2em;
        }

        .fa-3x {
            font-size: 3em;
        }

        .fa-4x {
            font-size: 4em;
        }

        .fa-5x {
            font-size: 5em;
        }

        .fa-6x {
            font-size: 6em;
        }

        .fa-7x {
            font-size: 7em;
        }

        .fa-8x {
            font-size: 8em;
        }

        .fa-9x {
            font-size: 9em;
        }

        .fa-10x {
            font-size: 10em;
        }

        .fa-fw {
            text-align: center;
            width: 1.25em;
        }

        .fa-ul {
            list-style-type: none;
            margin-left: 2.5em;
            padding-left: 0;
        }

        .fa-ul>li {
            position: relative;
        }

        .fa-li {
            left: -2em;
            position: absolute;
            text-align: center;
            width: 2em;
            line-height: inherit;
        }

        .fa-border {
            border: solid 0.08em #eee;
            border-radius: 0.1em;
            padding: 0.2em 0.25em 0.15em;
        }

        .fa-pull-left {
            float: left;
        }

        .fa-pull-right {
            float: right;
        }

        .fa.fa-pull-left,
        .fas.fa-pull-left,
        .far.fa-pull-left,
        .fal.fa-pull-left,
        .fab.fa-pull-left {
            margin-right: 0.3em;
        }

        .fa.fa-pull-right,
        .fas.fa-pull-right,
        .far.fa-pull-right,
        .fal.fa-pull-right,
        .fab.fa-pull-right {
            margin-left: 0.3em;
        }

        .fa-spin {
            -webkit-animation: fa-spin 2s infinite linear;
            animation: fa-spin 2s infinite linear;
        }

        .fa-pulse {
            -webkit-animation: fa-spin 1s infinite steps(8);
            animation: fa-spin 1s infinite steps(8);
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .fa-rotate-90 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .fa-rotate-180 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .fa-rotate-270 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .fa-flip-horizontal {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
            -webkit-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }

        .fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
            -webkit-transform: scale(1, -1);
            transform: scale(1, -1);
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
            -webkit-transform: scale(-1, -1);
            transform: scale(-1, -1);
        }

        :root .fa-rotate-90,
        :root .fa-rotate-180,
        :root .fa-rotate-270,
        :root .fa-flip-horizontal,
        :root .fa-flip-vertical,
        :root .fa-flip-both {
            -webkit-filter: none;
            filter: none;
        }

        .fa-stack {
            display: inline-block;
            height: 2em;
            position: relative;
            width: 2.5em;
        }

        .fa-stack-1x,
        .fa-stack-2x {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .svg-inline--fa.fa-stack-1x {
            height: 1em;
            width: 1.25em;
        }

        .svg-inline--fa.fa-stack-2x {
            height: 2em;
            width: 2.5em;
        }

        .fa-inverse {
            color: #fff;
        }

        .sr-only {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            width: auto;
        }

        .svg-inline--fa .fa-primary {
            fill: var(--fa-primary-color, currentColor);
            opacity: 1;
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa .fa-secondary {
            fill: var(--fa-secondary-color, currentColor);
            opacity: 0.4;
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-primary {
            opacity: 0.4;
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-secondary {
            opacity: 1;
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa mask .fa-primary,
        .svg-inline--fa mask .fa-secondary {
            fill: black;
        }

        .fad.fa-inverse {
            color: #fff;
        }

    </style>
    <style type="text/css">
        .qrcode-stream-wrapper[data-v-5319f427] {
            width: 100%;
            height: 100%;
            position: relative;
            z-index: 0
        }

        .qrcode-stream-overlay[data-v-5319f427] {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0
        }

        .qrcode-stream-camera[data-v-5319f427] {
            width: 100%;
            height: 100%;
            display: block;
            -o-object-fit: cover;
            object-fit: cover
        }

    </style>


    <style type="text/css">
        .bordabajo li {
            border-bottom: 1px solid #cecece !important;
        }

        .softgray {
            background: #f6f7f9;
            position: absolute;
        }

        .clp-largefont {
            font-size: 15px;
            font-weight: 500;
        }

        .subappbar {
            height: 90px;
            margin-top: 0px !important;
        }

        .useravatar {
            border-radius: 4px;
            width: 50%;
            margin: 0 auto !important;
        }

        .pullmeup {
            position: relative;
            top: -70px;
            z-index: 999999;
        }

        .conten {
            max-width: 400px;
            margin: 0 auto;
        }

        .identidad {
            font-size: 24px;
            font-weight: 500;
        }

        .apellidos {
            font-size: 20px;
            font-weight: 500;
        }

        .nombres {
            font-size: 20px;
            font-weight: 400;
        }

        .explicax {
            top: -60px;
            background: #fff0a0;
            padding: 18px;
            font-size: 12px;
            margin: 10px;
            text-align: center;
        }

        .explicaIngreso {
            top: -60px;
            background: #fff0a0;
            padding: 18px;
            font-size: 15px;
            margin: 10px;
            text-align: center;
        }

        .reescanea {
            top: -69px;
        }

        .gobcllog {
            top: -60px;
        }

        .esuppercase {
            text-transform: uppercase !important;
        }

        .button.forzaradiox {
            border-radius: 0px 0px 4px 4px !important;
        }

    </style>


</head>

<body>
    <div id="app" style="height: 100%;" data-v-app="">
        <div id="framework7-root" class="framework7-root">
            <div class="view view-main safe-areas">
                <!---->
                <div class="page mylogin back1 text-align-center page-current">

                    <div class="navbar">
                        <div class="navbar-bg"></div>
                        <div class="navbar-inner sliding">
                            <!---->
                            <div class="title"> Escáner <span class="subtitle">V
                                    {{ env('APP_VERSION') }}</span></div>
                            <!---->
                            <!---->
                            <div class="right">
                                <div class="locale-changer" data-v-f8c107b6="">
                                    <div class="list no-hairlines no-bg" data-v-f8c107b6="">
                                        <!---->
                                        <ul>
                                            <li class="" data-v-f8c107b6="">
                                                <!---->
                                                <div class="item-content item-input item-input-with-value">
                                                    <!---->
                                                    <div class="item-media">
                                                        <!----><svg class="svg-inline--fa fa-language fa-w-20 fa-2x"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="language" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                                            color="white" data-v-f8c107b6="">
                                                            <path class="" fill="currentColor"
                                                                d="M152.1 236.2c-3.5-12.1-7.8-33.2-7.8-33.2h-.5s-4.3 21.1-7.8 33.2l-11.1 37.5H163zM616 96H336v320h280c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24zm-24 120c0 6.6-5.4 12-12 12h-11.4c-6.9 23.6-21.7 47.4-42.7 69.9 8.4 6.4 17.1 12.5 26.1 18 5.5 3.4 7.3 10.5 4.1 16.2l-7.9 13.9c-3.4 5.9-10.9 7.8-16.7 4.3-12.6-7.8-24.5-16.1-35.4-24.9-10.9 8.7-22.7 17.1-35.4 24.9-5.8 3.5-13.3 1.6-16.7-4.3l-7.9-13.9c-3.2-5.6-1.4-12.8 4.2-16.2 9.3-5.7 18-11.7 26.1-18-7.9-8.4-14.9-17-21-25.7-4-5.7-2.2-13.6 3.7-17.1l6.5-3.9 7.3-4.3c5.4-3.2 12.4-1.7 16 3.4 5 7 10.8 14 17.4 20.9 13.5-14.2 23.8-28.9 30-43.2H412c-6.6 0-12-5.4-12-12v-16c0-6.6 5.4-12 12-12h64v-16c0-6.6 5.4-12 12-12h16c6.6 0 12 5.4 12 12v16h64c6.6 0 12 5.4 12 12zM0 120v272c0 13.3 10.7 24 24 24h280V96H24c-13.3 0-24 10.7-24 24zm58.9 216.1L116.4 167c1.7-4.9 6.2-8.1 11.4-8.1h32.5c5.1 0 9.7 3.3 11.4 8.1l57.5 169.1c2.6 7.8-3.1 15.9-11.4 15.9h-22.9a12 12 0 0 1-11.5-8.6l-9.4-31.9h-60.2l-9.1 31.8c-1.5 5.1-6.2 8.7-11.5 8.7H70.3c-8.2 0-14-8.1-11.4-15.9z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="item-inner">
                                                        <!---->
                                                        <!---->
                                                        <div class="item-input-wrap input-dropdown"><select
                                                                placeholder="placeholder" class="input-with-value">
                                                                <option class="color-black" value="es"
                                                                    data-v-f8c107b6="">Español</option>
                                                                <option class="color-black" value="ar"
                                                                    data-v-f8c107b6="">العربية</option>
                                                                <option class="color-black" value="de"
                                                                    data-v-f8c107b6="">Deutsch</option>
                                                                <option class="color-black" value="en"
                                                                    data-v-f8c107b6="">English</option>
                                                                <option class="color-black" value="fr"
                                                                    data-v-f8c107b6="">Francais</option>
                                                                <option class="color-black" value="hi"
                                                                    data-v-f8c107b6="">हिन्दी, हिंदी</option>
                                                                <option class="color-black" value="he"
                                                                    data-v-f8c107b6="">עברית</option>
                                                                <option class="color-black" value="it"
                                                                    data-v-f8c107b6="">Italiano</option>
                                                                <option class="color-black" value="ja"
                                                                    data-v-f8c107b6="">日本語 (にほんご)</option>
                                                                <option class="color-black" value="ko"
                                                                    data-v-f8c107b6="">한국어</option>
                                                                <option class="color-black" value="nl"
                                                                    data-v-f8c107b6="">Nederlands</option>
                                                                <option class="color-black" value="pl"
                                                                    data-v-f8c107b6="">język polski</option>
                                                                <option class="color-black" value="pt"
                                                                    data-v-f8c107b6="">Português</option>
                                                                <option class="color-black" value="ru"
                                                                    data-v-f8c107b6="">русский</option>
                                                                <option class="color-black" value="zh"
                                                                    data-v-f8c107b6="">中文</option>
                                                            </select>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                        <!---->
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                </div>
                                                <!---->
                                                <!---->
                                                <!---->
                                            </li>
                                        </ul>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="toolbar toolbar-bottom latoolbar">
                        <div class="toolbar-inner"><img class="dedos" src="/images/banner_mevacuno.png"></div>
                    </div>
                    <!---->
                    <div class="page-content">
                        <!---->
                        <!---->
                        <!---->
                        <!---->

                        <div
                            class="block bannerxsup
                        no-margin-vertical
                        padding
                        text-align-center">
                            Para tener acceso de lectura a la información íntegra del pase a escanear, inicie sesión con
                            su Clave Única
                        </div>
                        <div class="block"><a
                                class="button button-large button-raised backbluex centered margin-top" href="#">
                                <!---->
                                <!---->
                                <div class="btn-cu"><span class="cl-claveunica"></span><span
                                        class="texto">Iniciar sesión</span></div>
                            </a></div>
                        <div class="block">Puede escanear sin autenticarse, pero solo accederá a información
                            parcial</div>
                        <div class="block no-margin-vertical"><a class="button button-large button-outline color-purple"
                                href="javascript:open()">
                                <!---->
                                <!----><svg class="svg-inline--fa fa-qrcode fa-w-14 fa-lg margin-right-half"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="qrcode" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path class="" fill="currentColor"
                                        d="M0 224h192V32H0v192zM64 96h64v64H64V96zm192-64v192h192V32H256zm128 128h-64V96h64v64zM0 480h192V288H0v192zm64-128h64v64H64v-64zm352-64h32v128h-96v-32h-32v96h-64V288h96v32h64v-32zm0 160h32v32h-32v-32zm-64 0h32v32h-32v-32z">
                                    </path>
                                </svg>Escanear pase
                            </a>
                        </div>
                        <!---->
                        <div id="modal-backdrop" class="popup-backdrop"></div>
                        <!---->
                        <!---->


                        <div id="modal" class="popup scanner-popup" style="display: none;>
                            <!--ADD CLASS " modal-in" && change style "display:block;" -->
                            <div class="page">
                                <div class="navbar">
                                    <div class="navbar-bg"></div>
                                    <div class="navbar-inner sliding">
                                        <!---->
                                        <div class="title"> Encuadre Código QR
                                            <!---->
                                        </div>
                                        <!---->
                                        <!---->
                                        <div class="right"><a class="link popup-close"
                                                href="javascript:open()">
                                                <!---->
                                                <!---->Cerrar
                                            </a></div>
                                    </div>
                                </div>
                                <!---->
                                <div class="page-content">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <div class="block no-margin no-padding">

                                        <span id="camera-details"></span>

                                        <div class="block text-align-center">Enfoque el código QR en el recuadro</div>

                                        <video id="preview"></video>
                                        <!---->
                                        <!---->
                                    </div>
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                        </div>


                        <div id="modal-resultados" class="popup resultado-popup" style="display: none;">
                            <div class="page softgray" data-name="home">
                                <!---->
                                <div class="page-content" style="top:-100px !important">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <div class="appbar bg-color-blue">
                                        <div class="appbar-inner">
                                            <div class="left clp-largefont">Pase de Movilidad</div>
                                            <div class="right"><svg
                                                    class="svg-inline--fa fa-thumbs-up fa-w-16 fa-lg" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="thumbs-up" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path class="" fill="currentColor"
                                                        d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z">
                                                    </path>
                                                </svg></div>
                                        </div>
                                    </div>
                                    <div class="block bg-color-blue subappbar text-align-center">
                                        <h1 class="text-color-white text-align-center esuppercase">Habilitado </h1>
                                    </div>
                                    <div class="block conten no-padding">
                                        <div class="card pullmeup text-align-center">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <div
                                                class="block text-align-center no-margin-top margin-bottom-half identidad">
                                                <div> <span id="tipo_documento">RUN</span> <span
                                                        id="nro_documento">********.643-8</span></div>
                                                <div class="apellidos"><span id="apellido_primero">MA*******</span>
                                                    <span id="apellido_segundo">VA*******</span>
                                                </div>
                                                <div class="nombres"><span id="nombre_primero">Ces**</span></div>
                                            </div>
                                        </div>
                                        <div class="block reescanea no-margin-vertical"><a
                                                class="button button-large button-raised button-outline color-purple"
                                                href="javascript:resultados()">
                                                <!---->
                                                <!----><svg
                                                    class="svg-inline--fa fa-qrcode fa-w-14 fa-lg margin-right-half"
                                                    aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="qrcode" role="img" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 448 512">
                                                    <path class="" fill="currentColor"
                                                        d="M0 224h192V32H0v192zM64 96h64v64H64V96zm192-64v192h192V32H256zm128 128h-64V96h64v64zM0 480h192V288H0v192zm64-128h64v64H64v-64zm352-64h32v128h-96v-32h-32v96h-64V288h96v32h64v-32zm0 160h32v32h-32v-32zm-64 0h32v32h-32v-32z">
                                                    </path>
                                                </svg>Escanear nuevo pase
                                            </a></div>
                                        <div class="block explicax">
                                            <div>El <b>Pase de movilidad HABILITADO</b> acredita que la persona en
                                                consulta ya ha cumplido el período de 14 días luego de completar su
                                                esquema de vacunación contra el COVID-19 y que, además, no se encuentra
                                                con indicación de aislamiento obligatorio determinado por la autoridad
                                                sanitaria según los registros oficiales actuales.</div>
                                        </div>
                                        <div class="block text-align-center gobcllog">
                                            <div class="row">
                                                <div class="col"><img
                                                        src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMvaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwNiA3OS4xNjQ3NTMsIDIwMjEvMDIvMTUtMTE6NTI6MTMgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkVENjkzNEZEQjE5MDExRUI5RDVBQkEzNUEyQjk1NEUzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkVENjkzNEZDQjE5MDExRUI5RDVBQkEzNUEyQjk1NEUzIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE4IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkFCMzU4N0RDNEUyRjExRUI4QzU0OEZCMzgwMjkzMjMyIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkFCMzU4N0RENEUyRjExRUI4QzU0OEZCMzgwMjkzMjMyIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJ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">
                                                    <!---->
                                                </div>
                                                <div class="col"><img
                                                        src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMvaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwNiA3OS4xNjQ3NTMsIDIwMjEvMDIvMTUtMTE6NTI6MTMgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkVENjkzNEY5QjE5MDExRUI5RDVBQkEzNUEyQjk1NEUzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkVENjkzNEY4QjE5MDExRUI5RDVBQkEzNUEyQjk1NEUzIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE4IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkFCMzU4N0RDNEUyRjExRUI4QzU0OEZCMzgwMjkzMjMyIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkFCMzU4N0RENEUyRjExRUI4QzU0OEZCMzgwMjkzMjMyIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJ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">
                                                    <!---->
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                        </div>

                        <div id="dialogo" class="dialog dialog-buttons-1 " style="display: none;">
                            <div class="dialog-inner">
                                <div class="dialog-title">Escaneo pase de movilidad</div>
                                <div class="dialog-text">Debe escanear el QR utilizando el scanner de esta app</div>
                            </div>
                            <div class="dialog-buttons"><a href="javascript:dialogo()"
                                    class="dialog-button dialog-button-bold">OK</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.CSRF_TOKEN = '{{ csrf_token() }}';

        (() => {
            const params = getAllUrlParams(window.location.href)

            if (params.ff) {
                dialogo()
            }


        })()




        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview'),
            mirror: false,
        });
        scanner.addListener('scan', async function(content) {
            persona = await check(content)
            console.log(persona);

        });

        function scan() {


            Instascan.Camera.getCameras().then(function(cameras) {

                document.getElementById('camera-details').innerHTML += JSON.stringify(cameras) + '  ';
                document.getElementById('camera-details').innerHTML += cameras.length;

                console.log(cameras)
                console.log(cameras.length)

                if (cameras.length > 0) {
                    if (cameras.length == 2) {
                        scanner.start(cameras[1]);
                    } else {
                        scanner.start(cameras[0]);
                    }

                    if (cameras.length === 4) {
                        scanner.start(cameras[2]);
                    } else {
                        scanner.start(cameras[0]);
                    }


                } else {
                    console.error('No cameras found.');
                }
            }).catch(function(e) {
                console.error(e);
            });
        }

        function dialogo() {

            let dialogo = document.getElementById('dialogo');
            let backdrop = document.getElementById('modal-backdrop');
            if (document.querySelector('.dialogo') === null) {
                backdrop.classList.add('backdrop-in', 'dialogo');
                dialogo.classList.add('modal-in');
                dialogo.style.display = "block";

            } else {
                backdrop.classList.remove('backdrop-in', 'dialogo');
                dialogo.classList.remove('modal-in');
                dialogo.style.display = "none";
            }
        }

        function open(e) {

            let modal = document.getElementById('modal');
            let backdrop = document.getElementById('modal-backdrop');
            if (document.querySelector('.scanner') === null) {
                backdrop.classList.add('backdrop-in', 'scanner');
                modal.classList.add('modal-in');
                modal.style.display = "block";
                scan()
            } else {
                backdrop.classList.remove('backdrop-in', 'scanner');
                modal.classList.remove('modal-in');
                modal.style.display = "none";
                scanner.stop();
            }
        }

        function resultados(persona) {

            let navbar = document.querySelector('.navbar');
            let footer = document.querySelector('.toolbar');

            let modal = document.getElementById('modal-resultados');
            let backdrop = document.getElementById('modal-backdrop');

            if (document.querySelector('.resultados') === null) {

                document.getElementById('nombre_primero').innerHTML = ocultar_nombre(persona.nombre_primer);
                document.getElementById('apellido_primero').innerHTML = ocultar_nombre(persona.apellido_primer);

                document.getElementById('apellido_segundo').innerHTML = ocultar_nombre(persona.apellido_segundo);

                document.getElementById('nro_documento').innerHTML = ocultar_documento(persona.nro_documento);
                document.getElementById('tipo_documento').innerHTML = persona.tipo_documento;

                backdrop.classList.add('backdrop-in', 'resultados');
                modal.classList.add('modal-in');
                modal.style.display = "block";

                navbar.style.display = "none"
                footer.style.display = "none"

            } else {
                backdrop.classList.remove('backdrop-in', 'resultados');
                modal.classList.remove('modal-in');
                modal.style.display = "none";
                navbar.style.display = "block"
                footer.style.display = "block"
            }
        }

        async function check(url) {
            const data = getAllUrlParams(url);
            if (data.ff) {
                persona = await showResult(data.ff)
                modalResult(persona);
            } else {
                return false
            }
        }


        function showResult(token) {
            return new Promise(async (res, rej) => {
                const response = await fetch('resultado?tk=' + token, {
                    method: 'GET',
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-Token": window.CSRF_TOKEN
                    },
                })
                json = await response.json();
                res(json)

            })
        }


        function modalResult(persona) {
            open()
            setTimeout(() => {
                resultados(persona)
            }, 500);
        }

        function ocultar_nombre(string) {
            try {


                let count = string.split('').length;

                let punto = ''
                for (let i = 0; i < count - 2; i++) {
                    punto += '*';
                }

                return string.substring(0, 2) + punto;

            } catch (error) {
                return ' '
            }
        }


        function ocultar_documento(string) {
            try {
                let count = string.split('').length;

                let punto = ''
                for (let i = 0; i < count - 4; i++) {
                    punto += '*';
                }

                return punto + '.' + string.substring(7) + '-8';
            } catch (error) {
                return ' '
            }
        }
    </script>
</body>

</html>
