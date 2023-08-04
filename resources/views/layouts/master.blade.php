<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>
    <link rel="stylesheet" href="{{mix("css/app.css")}}">

    @livewireStyles

    <script nonce="c2bec273-aedd-491f-925f-951b0c9c31cb">
        (function(w,d){!function(Y,Z,_,ba){Y[_]=Y[_]||{};Y[_].executed=[];Y.zaraz={deferred:[],listeners:[]};Y.zaraz.q=[];Y.zaraz._f=function(bb){return function(){var bc=Array.prototype.slice.call(arguments);Y.zaraz.q.push({m:bb,a:bc})}};for(const bd of["track","set","debug"])Y.zaraz[bd]=Y.zaraz._f(bd);Y.zaraz.init=()=>{var be=Z.getElementsByTagName(ba)[0],bf=Z.createElement(ba),bg=Z.getElementsByTagName("title")[0];bg&&(Y[_].t=Z.getElementsByTagName("title")[0].text);Y[_].x=Math.random();Y[_].w=Y.screen.width;Y[_].h=Y.screen.height;Y[_].j=Y.innerHeight;Y[_].e=Y.innerWidth;Y[_].l=Y.location.href;Y[_].r=Z.referrer;Y[_].k=Y.screen.colorDepth;Y[_].n=Z.characterSet;Y[_].o=(new Date).getTimezoneOffset();if(Y.dataLayer)for(const bk of Object.entries(Object.entries(dataLayer).reduce(((bl,bm)=>({...bl[1],...bm[1]})),{})))zaraz.set(bk[0],bk[1],{scope:"page"});Y[_].q=[];for(;Y.zaraz.q.length;){const bn=Y.zaraz.q.shift();Y[_].q.push(bn)}bf.defer=!0;for(const bo of[localStorage,sessionStorage])Object.keys(bo||{}).filter((bq=>bq.startsWith("_zaraz_"))).forEach((bp=>{try{Y[_]["z_"+bp.slice(7)]=JSON.parse(bo.getItem(bp))}catch{Y[_]["z_"+bp.slice(7)]=bo.getItem(bp)}}));bf.referrerPolicy="origin";bf.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(Y[_])));be.parentNode.insertBefore(bf,be)};["complete","interactive"].includes(Z.readyState)?zaraz.init():Y.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
    </script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <x-topnav />


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="index3.html" class="brand-link">
                <span class="brand-text font-weight-bold" style="font-size: 1.3em;">GestCars</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('images/defendintelligence.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ userFullName() }}</a>
                    </div>
                </div>

                <x-menu />

            </div>

        </aside>

        <div class="content-wrapper">

            <div class="content">
                <div class="container-fluid">
                    @yield("contenu")
                </div>
            </div>

        </div>

        <x-sidebar />

        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline">
                Tout Droit Réservé
            </div>

            <strong><a href="#">Oriane Neo &copy; 2023</a>.</strong> 
        </footer>
    </div>

    <script src="{{mix("js/app.js")}}"></script>

    @livewireScripts
    
</body>

</html>