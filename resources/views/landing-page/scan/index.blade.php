@extends('layouts.app2')
<link rel="stylesheet" href="../styles.css" />

@section('content')

<div id="container">
    <h1>QR Code Scanner</h1>

    <a id="btn-scan-qr">
        <img src="https://uploads.sitepoint.com/wp-content/uploads/2017/07/1499401426qr_icon.svg">
    <a/>

    <canvas hidden="" id="qr-canvas"></canvas>

    <div id="qr-result" hidden="">
        <b>Data:</b> <span id="outputData"></span>
    </div>
</div>

<script src="./src/qrCodeScanner.js"></script>


@endsection