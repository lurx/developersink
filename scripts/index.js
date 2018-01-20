$(".init-scrollbar").mCustomScrollbar({
    theme: "minimal",
    callbacks: {
        onCreate: function() {
            if ( $(this).attr('id') == 'sidebar' ) {
                //move sidebar-label outside the scrollbar after initiated
                var $sidebarLabel = $(this).find('.js-sidebar-toggle-label');
                $('#sidebar').append( $sidebarLabel );
            }
        }
    }
});
