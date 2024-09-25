export const initVideo = () => {
    const video = document.getElementById('myVideo');

    function updateVideoSource() {
        const source = document.getElementById('videoSrc');

        if (window.innerWidth < 450) {
            source.setAttribute('src', php_vars.home + '/src/video/timelapse2.mp4');
        }
        video.load();

    }

    if (video) {
        // Проверяем при загрузке страницы
        window.onload = updateVideoSource;

        // Проверяем при изменении размера окна
        window.onresize = updateVideoSource;
    }
}