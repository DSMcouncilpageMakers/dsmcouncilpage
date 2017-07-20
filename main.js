$(function () {

    /*
     * Sticky header
     */
    $('.page-header').each(function () {

        var $window = $(window), // 창을 jQuery 오브젝트 화
            $header = $(this),   // 헤더를 jQuery 객체 화
            // 헤더의 기본 위치를 검색
            headerOffsetTop = $header.offset().top;

        // 윈도우의 스크롤 이벤트를 모니터링
        // (창이 스크롤 할 때마다 작업을 수행하기)
        $window.on('scroll', function () {
            // 윈도우의 스크롤 량을 확인하고,
            // 헤더의 기본 위치를 지나서 있으면 클래스를 부여,
            // 그렇지 않으면 삭제
            if ($window.scrollTop() > headerOffsetTop) {
                $header.addClass('sticky');
            } else {
                $header.removeClass('sticky');
            }
        });

        // 윈도우의 스크롤 이벤트를 발생시키는
        // (헤더의 초기 위치를 조정하기 위해)
        $window.trigger('scroll');

    });
});
