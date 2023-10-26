export default () => ({
    isOpen: false,

    root: {
        ['x-on:sidebar-toggle.window']() {
            this.isOpen = !this.isOpen;
        },
        ['x-bind:class']() {
            return {
                '-ml-64 lg:ml-0': !this.isOpen,
                'ml-0 lg:-ml-64': this.isOpen,
            };
        },
    },
});
