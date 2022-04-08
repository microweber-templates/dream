window.TemplateVectorIcons = [

    {
      name: 'infinity',
        source: `<svg id="preloader" width="240px" height="120px" viewBox="0 0 240 120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

  <path id="loop-normal" class="st1" d="M120.5,60.5L146.48,87.02c14.64,14.64,38.39,14.65,53.03,0s14.64-38.39,0-53.03s-38.39-14.65-53.03,0L120.5,60.5
L94.52,87.02c-14.64,14.64-38.39,14.64-53.03,0c-14.64-14.64-14.64-38.39,0-53.03c14.65-14.64,38.39-14.65,53.03,0z">
    <animate attributeName="stroke-dasharray" from="500, 50" to="450 50" begin="0s" dur="2s" repeatCount="indefinite" />
    <animate attributeName="stroke-dashoffset" from="-40" to="-540" begin="0s" dur="2s" repeatCount="indefinite" />
  </path>

  <path id="loop-offset" d="M146.48,87.02c14.64,14.64,38.39,14.65,53.03,0s14.64-38.39,0-53.03s-38.39-14.65-53.03,0L120.5,60.5L94.52,87.02c-14.64,14.64-38.39,14.64-53.03,0c-14.64-14.64-14.64-38.39,0-53.03c14.65-14.64,38.39-14.65,53.03,0L120.5,60.5L146.48,87.02z"></path>

  <path id="socket" d="M7.5,0c0,8.28-6.72,15-15,15l0-30C0.78-15,7.5-8.28,7.5,0z">
    <animateMotion
      dur="2s"
      repeatCount="indefinite"
      rotate="auto"
      keyTimes="0;1"
      keySplines="0.42, 0.0, 0.58, 1.0"
    >
      <mpath xlink:href="#loop-offset"/>
    </animateMotion>
  </path>

<path id="plug" d="M0,9l15,0l0-5H0v-8.5l15,0l0-5H0V-15c-8.29,0-15,6.71-15,15c0,8.28,6.71,15,15,15V9z">
  <animateMotion
    dur="2s"
\t  rotate="auto"
\t  repeatCount="indefinite"
\t  keyTimes="0;1"
\t  keySplines="0.42, 0, 0.58, 1"
  >
    <mpath xlink:href="#loop-normal"/>
  </animateMotion>
</path>

  <style>



svg #plug,
svg #socket {
  fill:#FDB515;
}

svg #loop-normal {
  fill: none;
  stroke: #FDB515;
  stroke-width: 12;
}

svg #loop-offset {
  display: none;
}

 </style>

</svg>

 `
    },
    {
        name: 'storm',
        source:'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><defs><clipPath id="a"><path fill="none" d="M12 35l-5.28-4.21-2-6 1-7 4-5 5-3h6l5 1 3 3L33 20l-6 4h-6l-3 3v4l-4 2-2 2z"/></clipPath></defs><g clip-path="url(#a)"><g><path fill="none" stroke="#72b9d5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M29.33 26.68a10.61 10.61 0 01-10.68-10.54A10.5 10.5 0 0119 13.5a10.54 10.54 0 1011.5 13.11 11.48 11.48 0 01-1.17.07z"/><animateTransform attributeName="transform" dur="10s" repeatCount="indefinite" type="rotate" values="-10 19.22 24.293;10 19.22 24.293;-10 19.22 24.293"/></g></g><path fill="none" stroke="#e5e7eb" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M43.67 45.5h2.83a7 7 0 000-14h-.32a10.49 10.49 0 00-19.11-8 7 7 0 00-10.57 6 7.21 7.21 0 00.1 1.14A7.5 7.5 0 0018 45.5a4.19 4.19 0 00.5 0v0"/><g><circle cx="31" cy="45" r="1.25" fill="none" stroke="#72b8d4" stroke-miterlimit="10"/><path fill="none" stroke="#72b8d4" stroke-linecap="round" stroke-miterlimit="10" d="M33.17 46.25l-1.09-.63m-2.16-1.24l-1.09-.63M31 42.5v1.25m0 3.75v-1.25m-1.08-.63l-1.09.63m4.34-2.5l-1.09.63"/><animateTransform additive="sum" attributeName="transform" dur="4s" repeatCount="indefinite" type="translate" values="-1 -6; 1 12"/><animateTransform additive="sum" attributeName="transform" dur="9s" repeatCount="indefinite" type="rotate" values="0 31 45; 360 31 45"/><animate attributeName="opacity" dur="4s" repeatCount="indefinite" values="0;1;1;1;0"/></g><g><circle cx="24" cy="45" r="1.25" fill="none" stroke="#72b8d4" stroke-miterlimit="10"/><path fill="none" stroke="#72b8d4" stroke-linecap="round" stroke-miterlimit="10" d="M26.17 46.25l-1.09-.63m-2.16-1.24l-1.09-.63M24 42.5v1.25m0 3.75v-1.25m-1.08-.63l-1.09.63m4.34-2.5l-1.09.63"/><animateTransform additive="sum" attributeName="transform" begin="-2s" dur="4s" repeatCount="indefinite" type="translate" values="1 -6; -1 12"/><animateTransform additive="sum" attributeName="transform" dur="9s" repeatCount="indefinite" type="rotate" values="0 24 45; 360 24 45"/><animate attributeName="opacity" begin="-2s" dur="4s" repeatCount="indefinite" values="0;1;1;1;0"/></g><g><circle cx="38" cy="45" r="1.25" fill="none" stroke="#72b8d4" stroke-miterlimit="10"/><path fill="none" stroke="#72b8d4" stroke-linecap="round" stroke-miterlimit="10" d="M40.17 46.25l-1.09-.63m-2.16-1.24l-1.09-.63M38 42.5v1.25m0 3.75v-1.25m-1.08-.63l-1.09.63m4.34-2.5l-1.09.63"/><animateTransform additive="sum" attributeName="transform" begin="-1s" dur="4s" repeatCount="indefinite" type="translate" values="1 -6; -1 12"/><animateTransform additive="sum" attributeName="transform" dur="9s" repeatCount="indefinite" type="rotate" values="0 38 45; 360 38 45"/><animate attributeName="opacity" begin="-1s" dur="4s" repeatCount="indefinite" values="0;1;1;1;0"/></g><g><path fill="#f59e0b" d="M30 36l-4 12h4l-2 10 10-14h-6l4-8h-6z"/><animate attributeName="opacity" dur="2s" repeatCount="indefinite" values="1;1;1;1;1;1;0.1;1;0.1;1;1;0.1;1;0.1;1"/></g></svg>'
    },

    {
        name: 'case',
        source: `<svg width="48px" height="48px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 48 48">
                                    <path fill="#424242" d="M27,7h-6c-1.7,0-3,1.3-3,3v3h2v-3c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v3h2v-3C30,8.3,28.7,7,27,7z"/>
                                    <path fill="#E65100" d="M40,43H8c-2.2,0-4-1.8-4-4V15c0-2.2,1.8-4,4-4h32c2.2,0,4,1.8,4,4v24C44,41.2,42.2,43,40,43z"/>
                                    <path fill="#FF6E40" d="M40,28H8c-2.2,0-4-1.8-4-4v-9c0-2.2,1.8-4,4-4h32c2.2,0,4,1.8,4,4v9C44,26.2,42.2,28,40,28z"/>
                                    <path fill="#FFF3E0" d="M26,26h-4c-0.6,0-1-0.4-1-1v-2c0-0.6,0.4-1,1-1h4c0.6,0,1,0.4,1,1v2C27,25.6,26.6,26,26,26z"/>
                                </svg>`
    },
    {
        name: 'social',
        source: ` <svg height='300px' width='300px'  fill="#000000" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 128 128" style="enable-background:new 0 0 128 128;" xml:space="preserve"><style type="text/css">
\t.st0{display:none;}
\t.st1{display:inline;}
\t.st2{fill:none;stroke:#000000;stroke-width:0.1;stroke-miterlimit:10;}
</style><g class="st0"><g class="st1"><rect class="st2" width="128" height="128"></rect><line class="st2" x1="0" y1="124" x2="128" y2="124"></line><line class="st2" x1="0" y1="120" x2="128" y2="120"></line><line class="st2" x1="0" y1="116" x2="128" y2="116"></line><line class="st2" x1="0" y1="112" x2="128" y2="112"></line><line class="st2" x1="0" y1="108" x2="128" y2="108"></line><line class="st2" x1="0" y1="104" x2="128" y2="104"></line><line class="st2" x1="0" y1="100" x2="128" y2="100"></line><line class="st2" x1="0" y1="96" x2="128" y2="96"></line><line class="st2" x1="0" y1="92" x2="128" y2="92"></line><line class="st2" x1="0" y1="88" x2="128" y2="88"></line><line class="st2" x1="0" y1="84" x2="128" y2="84"></line><line class="st2" x1="0" y1="80" x2="128" y2="80"></line><line class="st2" x1="0" y1="76" x2="128" y2="76"></line><line class="st2" x1="0" y1="72" x2="128" y2="72"></line><line class="st2" x1="0" y1="68" x2="128" y2="68"></line><line class="st2" x1="0" y1="64" x2="128" y2="64"></line><line class="st2" x1="0" y1="60" x2="128" y2="60"></line><line class="st2" x1="0" y1="56" x2="128" y2="56"></line><line class="st2" x1="0" y1="52" x2="128" y2="52"></line><line class="st2" x1="0" y1="48" x2="128" y2="48"></line><line class="st2" x1="0" y1="44" x2="128" y2="44"></line><line class="st2" x1="0" y1="40" x2="128" y2="40"></line><line class="st2" x1="0" y1="36" x2="128" y2="36"></line><line class="st2" x1="0" y1="32" x2="128" y2="32"></line><line class="st2" x1="0" y1="28" x2="128" y2="28"></line><line class="st2" x1="0" y1="24" x2="128" y2="24"></line><line class="st2" x1="0" y1="20" x2="128" y2="20"></line><line class="st2" x1="0" y1="16" x2="128" y2="16"></line><line class="st2" x1="0" y1="12" x2="128" y2="12"></line><line class="st2" x1="0" y1="8" x2="128" y2="8"></line><line class="st2" x1="0" y1="4" x2="128" y2="4"></line><line class="st2" x1="124" y1="0" x2="124" y2="128"></line><line class="st2" x1="120" y1="0" x2="120" y2="128"></line><line class="st2" x1="116" y1="0" x2="116" y2="128"></line><line class="st2" x1="112" y1="0" x2="112" y2="128"></line><line class="st2" x1="108" y1="0" x2="108" y2="128"></line><line class="st2" x1="104" y1="0" x2="104" y2="128"></line><line class="st2" x1="100" y1="0" x2="100" y2="128"></line><line class="st2" x1="96" y1="0" x2="96" y2="128"></line><line class="st2" x1="92" y1="0" x2="92" y2="128"></line><line class="st2" x1="88" y1="0" x2="88" y2="128"></line><line class="st2" x1="84" y1="0" x2="84" y2="128"></line><line class="st2" x1="80" y1="0" x2="80" y2="128"></line><line class="st2" x1="76" y1="0" x2="76" y2="128"></line><line class="st2" x1="72" y1="0" x2="72" y2="128"></line><line class="st2" x1="68" y1="0" x2="68" y2="128"></line><line class="st2" x1="64" y1="0" x2="64" y2="128"></line><line class="st2" x1="60" y1="0" x2="60" y2="128"></line><line class="st2" x1="56" y1="0" x2="56" y2="128"></line><line class="st2" x1="52" y1="0" x2="52" y2="128"></line><line class="st2" x1="48" y1="0" x2="48" y2="128"></line><line class="st2" x1="44" y1="0" x2="44" y2="128"></line><line class="st2" x1="40" y1="0" x2="40" y2="128"></line><line class="st2" x1="36" y1="0" x2="36" y2="128"></line><line class="st2" x1="32" y1="0" x2="32" y2="128"></line><line class="st2" x1="28" y1="0" x2="28" y2="128"></line><line class="st2" x1="24" y1="0" x2="24" y2="128"></line><line class="st2" x1="20" y1="0" x2="20" y2="128"></line><line class="st2" x1="16" y1="0" x2="16" y2="128"></line><line class="st2" x1="12" y1="0" x2="12" y2="128"></line><line class="st2" x1="8" y1="0" x2="8" y2="128"></line><line class="st2" x1="4" y1="0" x2="4" y2="128"></line></g></g><g><g><path d="M64,7C32.5,7,7,32.5,7,64s25.5,57,57,57s57-25.5,57-57S95.5,7,64,7z M90.8,81.6c-1.3,0.8-3,0.6-4.1-0.4    L67.7,92.3c0.3,1.4-0.3,3-1.7,3.8c-1.7,1-3.9,0.4-4.9-1.3c-0.4-0.7-0.5-1.6-0.4-2.3L41.3,81.3c-0.2,0.1-0.3,0.3-0.5,0.4    c-1.7,1-3.9,0.4-4.9-1.3s-0.4-3.9,1.3-4.9c0.2-0.1,0.4-0.2,0.6-0.3l-0.1-22.4c-0.8-0.3-1.5-0.8-1.9-1.6c-1-1.7-0.4-3.9,1.3-4.9    c1.4-0.8,3.1-0.6,4.2,0.5l19-11C60,34.4,60.6,32.8,62,32c1.7-1,3.9-0.4,4.9,1.3c0.5,0.8,0.6,1.7,0.4,2.5l19.4,11.1    c0.2-0.1,0.3-0.2,0.5-0.3c1.7-1,3.9-0.4,4.9,1.3c1,1.7,0.4,3.9-1.3,4.9c-0.2,0.1-0.3,0.2-0.5,0.2l0.1,22.2    c0.8,0.3,1.5,0.8,1.9,1.6C93.1,78.4,92.5,80.6,90.8,81.6z"></path><path d="M62.8,53.4V38.4c-0.5-0.2-1-0.4-1.4-0.8l-19,11.1c0.1,0.5,0.1,1.1,0,1.6l13.2,7.5    C57.2,55.5,59.8,53.8,62.8,53.4z"></path><path d="M53.6,64c0-1.6,0.4-3.1,1-4.4l-13.2-7.5c-0.2,0.2-0.4,0.4-0.7,0.5c-0.3,0.2-0.6,0.3-0.9,0.4l0.1,22.2    c0.6,0.1,1.1,0.4,1.5,0.9l13.2-7.5C54,67.1,53.6,65.6,53.6,64z"></path><path d="M88.1,53.1c-0.6-0.1-1.2-0.4-1.7-0.9l-12.6,6.9c0.8,1.5,1.2,3.1,1.2,4.9c0,1.6-0.4,3.1-1,4.5    c0,0,0,0,0,0l12.7,7.2c0.1-0.1,0.3-0.2,0.4-0.3c0.3-0.2,0.6-0.3,0.9-0.4L88.1,53.1z"></path><path d="M71.7,67.8c0-2.9-2.4-5.2-5.4-5.2h-3.9c-3,0-5.4,2.3-5.4,5.2V70h14.7V67.8z"></path><circle cx="64.3" cy="58.6" r="3.1"></circle><path d="M85.7,79.5c-0.2-0.7-0.2-1.4,0-2l-12.6-7.2c0,0,0,0,0,0c-1.8,2.5-4.7,4.3-8,4.5l0.1,14.8    c0.6,0.2,1.1,0.5,1.6,0.9L85.7,79.5z"></path><path d="M62.4,89.9c0.2-0.1,0.5-0.2,0.7-0.3L63,74.7c-3.1-0.4-5.7-2-7.4-4.4l-13.1,7.5c0.2,0.6,0.1,1.2,0,1.8    l19.2,11C61.8,90.3,62.1,90.1,62.4,89.9z"></path><path d="M64.8,53.3c3.2,0.1,6.1,1.7,8,4.1l12.7-7c-0.1-0.6-0.1-1.2,0.1-1.8l-19.2-11c-0.2,0.2-0.4,0.4-0.7,0.6    c-0.2,0.1-0.5,0.2-0.8,0.3V53.3z"></path></g></g></svg>`
    },

    {
        name: 'mushroom',
        source: `<svg height='300px' width='300px'  fill="#000000"
\txmlns="http://www.w3.org/2000/svg"
\txmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
\t<path d="M28.2617188,22.5317383c2.6308594,0,4.6923828-1.4140625,4.6923828-3.21875s-2.0615234-3.21875-4.6923828-3.21875  s-4.6923828,1.4140625-4.6923828,3.21875S25.6308594,22.5317383,28.2617188,22.5317383z M28.2617188,18.0942383  c1.6181641,0,2.6923828,0.7333984,2.6923828,1.21875s-1.0742188,1.21875-2.6923828,1.21875s-2.6923828-0.7333984-2.6923828-1.21875  S26.6435547,18.0942383,28.2617188,18.0942383z"></path>
\t<path d="M12.8623047,30.3500977c0.0351563,0,0.0703125,0,0.1054688-0.0009766  c0.9921875-0.0244141,2.0800781-0.3818359,3.0634766-1.0063477c2.2207031-1.409668,3.2041016-3.7080078,2.2373047-5.2319336  c-0.5058594-0.796875-1.4726563-1.2504883-2.6230469-1.2089844c-0.9921875,0.0244141-2.0810547,0.3818359-3.0644531,1.0063477  s-1.7695313,1.4570313-2.2138672,2.3447266c-0.5205078,1.0385742-0.5283203,2.0908203-0.0224609,2.887207  C10.8349609,29.9125977,11.7490234,30.3500977,12.8623047,30.3500977z M12.1552734,27.1479492  c0.2802734-0.5595703,0.8261719-1.125,1.4980469-1.5512695c0.671875-0.4267578,1.4160156-0.6801758,2.0410156-0.6953125  c0.0195313-0.0004883,0.0380859-0.0004883,0.0576172-0.0004883c0.4013672,0,0.7158203,0.105957,0.8271484,0.28125  c0.2597656,0.409668-0.2529297,1.6049805-1.6201172,2.472168c-0.6708984,0.4267578-1.4150391,0.6801758-2.0400391,0.6953125  c-0.4414063,0.0092773-0.7685547-0.0976563-0.8857422-0.28125C11.9169922,27.8842773,11.9638672,27.5317383,12.1552734,27.1479492z"></path>
\t<path d="M38.1679688,30.4379883c2.5332031,0,4.59375-2.0605469,4.59375-4.59375s-2.0605469-4.59375-4.59375-4.59375  s-4.59375,2.0605469-4.59375,4.59375S35.6347656,30.4379883,38.1679688,30.4379883z M38.1679688,23.2504883  c1.4306641,0,2.59375,1.1635742,2.59375,2.59375s-1.1630859,2.59375-2.59375,2.59375s-2.59375-1.1635742-2.59375-2.59375  S36.7373047,23.2504883,38.1679688,23.2504883z"></path>
\t<path d="M9.0898438,35.2397461c1.2314453,1.0439453,2.8076172,1.4057617,4.6835938,1.4057617  c1.8779297,0,4.0556641-0.362793,6.4902344-0.7680664c1.0871582-0.1810913,2.2422485-0.3633423,3.4246826-0.5308838  c-0.3710938,4.0415649-0.9393921,8.1288452-1.5008545,12.0963135c-0.2890625,2.0444336-0.578125,4.0874023-0.8417969,6.128418  c-0.0341797,0.2719727,0.0429688,0.5458984,0.2158203,0.7583008s0.4248047,0.3452148,0.6982422,0.3666992  C24.8271484,54.8984375,27.4140625,54.9995117,30,54.9995117s5.1728516-0.1010742,7.7402344-0.3032227  c0.2734375-0.0214844,0.5253906-0.1542969,0.6982422-0.3666992s0.25-0.4863281,0.2158203-0.7583008  c-0.2626953-2.0380859-0.5517578-4.078125-0.8408203-6.1201172c-0.5615234-3.9699097-1.1290894-8.0599976-1.5007324-12.1044922  c1.182251,0.1674805,2.3372803,0.3497314,3.4245605,0.5307617c4.8662109,0.8100586,8.7089844,1.4492188,11.1728516-0.637207  c1.5800781-1.3383789,2.3154297-3.5673828,2.3154297-7.0141602c0-4.2241821-1.1391602-8.1848755-3.118042-11.6013184  c-0.0227051-0.0455933-0.0452881-0.0884399-0.0750732-0.1304932c-1.833374-3.1185303-4.3726196-5.7717896-7.3982544-7.7415161  c-0.0449829-0.0357056-0.0913086-0.0634155-0.1410522-0.0905151C38.8828125,6.3486328,34.597168,5.0004883,30,5.0004883  c-2.2299194,0-4.3847656,0.3223877-6.4275513,0.9118042c-0.1835938,0.0012207-0.359314,0.0504761-0.5181274,0.1499634  C13.630127,9.0220337,6.7744141,17.8380127,6.7744141,28.2260742C6.7744141,31.6728516,7.5097656,33.9013672,9.0898438,35.2397461z   M35.8339844,47.7314453c0.2382813,1.6835938,0.4755859,3.3662109,0.6992188,5.0478516  c-4.3398438,0.2939453-8.7265625,0.2939453-13.0664063,0c0.2236328-1.684082,0.4619141-3.3696289,0.7011719-5.0561523  c0.5846558-4.1326294,1.1796265-8.3963013,1.5535889-12.6279297C27.1127319,34.9451904,28.5383911,34.8344727,30,34.8344727  c1.4619141,0,2.8878174,0.1107788,4.2793579,0.2608643C34.6533203,39.329834,35.2483521,43.5958862,35.8339844,47.7314453z   M47.9787598,16.9968872c-0.8066406,0.8303833-1.9194336,1.3161011-3.092041,1.3161011c-2.3779297,0-4.3125-1.9345703-4.3125-4.3125  c0-1.2546997,0.5410156-2.4210205,1.4664917-3.2342529C44.421814,12.4133911,46.4382935,14.5395508,47.9787598,16.9968872z   M24.0117188,9.9379883c0,1.6196289-1.3173828,2.9375-2.9375,2.9375c-1.4001465,0-2.5668335-0.9705811-2.8621826-2.2883911  c1.5739136-1.0552979,3.3004761-1.8951416,5.1326904-2.5022583C23.7698975,8.6047974,24.0117188,9.2527466,24.0117188,9.9379883z   M16.5269775,11.8379517c0.7440186,1.7896118,2.4926147,3.0375366,4.5472412,3.0375366c2.7226563,0,4.9375-2.2148438,4.9375-4.9375  c0-0.8597412-0.2270508-1.6858521-0.6364746-2.4146729C26.8661499,7.1903076,28.4101563,7.0004883,30,7.0004883  c3.7329102,0,7.2387695,0.9761963,10.2895508,2.675293c-1.0913086,1.1566772-1.715332,2.6904907-1.715332,4.324707  c0,3.480957,2.8320313,6.3125,6.3125,6.3125c1.5170288,0,2.9680176-0.5516357,4.1004028-1.5179443  c1.4193726,2.8455811,2.2384644,6.0409546,2.2384644,9.4310303c0,2.7758789-0.5263672,4.5712891-1.6083984,5.487793  c-1.7568359,1.4892578-5.1943359,0.9160156-9.5517578,0.190918C37.0537109,33.402832,33.640625,32.8344727,30,32.8344727  c-3.6396484,0-7.0537109,0.5683594-10.0654297,1.0698242c-4.3544922,0.7250977-7.7949219,1.2988281-9.5517578-0.1904297  c-1.0820313-0.9169922-1.6083984-2.7119141-1.6083984-5.487793C8.7744141,21.6334839,11.7963867,15.7340698,16.5269775,11.8379517z"></path>
</svg>`,
    },
]
