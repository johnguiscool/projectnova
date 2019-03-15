Nova.booting((Vue, router, store) => {
    router.addRoutes([
        {
            name: 'dialoguebuilder',
            path: '/dialoguebuilder',
            component: require('./components/Tool'),
        },
    ])
})
