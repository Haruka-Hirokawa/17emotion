$( function() {
    $( '.slider' ).slick( {
        autoplay: true,
        autoplaySpeed: 3000,
        centerMode: true, // 前後の画像がちょい見え、メイン画像は中央
        centerPadding: '5%',
        dots: true,
        infinite: true, // スライドをループさせるかどうか
        // slidesToShow: 3,
        // slidesToScroll: 2,
        speed: 1000,
        // responsive: [
        //     {
        //         breakpoint: 560,
        //         settings: {
        //             centerMode: false,
        //             slidesToShow: 1,
        //             slidesToScroll: 1
        //         }
        //     },
        // ]
    } );
} );