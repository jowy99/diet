function shareProperty(title, url) {
    if (navigator.share) {
        navigator.share({
            title,
            url,
        }).then(() => {
            console.log('Thanks for sharing!');
        }).catch(console.error);
    } else {
        console.log('Browser does not support sharing');
    }
}

export default function (Alpine) {
    Alpine.directive('share', function (el, {}, { cleanup }) {
        if (!navigator.share) {
            el.style.display = 'none';
            return;
        }
        const listener = () => {
            shareProperty(
                el.dataset.name,
                el.dataset.url,
            );
        };
        el.addEventListener('click', listener);
        cleanup(() => {
            el.removeEventListener('click', listener);
        });
    });
}
