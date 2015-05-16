    /**
     * Add custom Quicktag buttons to the WordPress editor 
     * for ver. 3.3 and above only
     * Params for the addButton function are:
     *  - Button HTML ID (required)
     *  - Opening Tag (required)
     *  - Closing Tag (required)
     *  - Access key, accesskey="" attribute for the button (optional)
     *  - Title, title="" attribute (optional)
     *  - Priority/position on bar, 1-9 = first, 11-19 = second,
     *    21-29 = third, etc. (optional)
     */

	QTags.addButton( '[about-style1]', 'About Style 1', '[about-style1]' );
	QTags.addButton( '[about-style2]', 'About Style 2', '[about-style2]' );
	QTags.addButton( '[teams]', 'Teams', '[teams]' );	
	QTags.addButton( '[wexperience]', 'Work Experience', '[wexperience]' );
	QTags.addButton( '[eexperience]', 'Education Experience', '[eexperience]' );
	QTags.addButton( '[milestones]', 'Milestones', '[milestones]' );
	QTags.addButton( '[services]', 'Services', '[services]' );
	QTags.addButton( '[skills]', 'Skills', '[skills]' );
	QTags.addButton( '[work_process]', 'Work Process', '[work_process]' );
	QTags.addButton( '[portfolio]', 'Portfolio', '[portfolio]' );
	QTags.addButton( '[pricetables]', 'Pricetables', '[pricetables]' );
	QTags.addButton( '[blog]', 'Blog', '[blog]' );
	QTags.addButton( '[testimonials]', 'Testimonials', '[testimonials]' );	
	QTags.addButton( '[clients_logo]', 'Clients Logo', '[clients_logo]' );
	QTags.addButton( '[contact]', 'Contact', '[contact]' );	

	/*
    QTags.addButton( 'php', 'PHP', '[ php gutter="false" ]', '[ /php]' );  
    QTags.addButton( 'js', 'JS', '[ js gutter="false"]', '[ /js]' );
    QTags.addButton( 'h2', 'H2', '< h2>');
    QTags.addButton( 'h3', 'H3', '< h3>' );
	*/
    /*
     * Add function callback button
     * Params are the same as above except the 'Opening Tag' param
     * becomes the callback function's name
     * and the 'Closing Tag' is ignored.
     
    QTags.addButton( 'tag', 'Link Tag', prompt_user );
    function prompt_user(e, c, ed) {
        prmt = prompt('Enter Tag Name');
        if ( prmt === null ) return;
        rtrn = '[tag content="' + prmt + '"][/tag]';
        this.tagStart = rtrn;
        QTags.TagButton.prototype.callback.call(this, e, c, ed);
    }
    */