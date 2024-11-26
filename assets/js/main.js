
    var tl = new TimelineMax();
    tl
    .staggerFromTo(".lePushReleaseFromLeft span",.5,{autoAlpha:0,x:-100,ease:Power3.easeOut},{autoAlpha:1,x:100,ease:Power2.easeOut},.2)
    .staggerTo(".lePushReleaseFromLeft span",.5,{x:0,ease:Power1.easeOut},.2,"-=2.2");

