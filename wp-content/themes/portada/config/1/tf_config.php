<?php

/******************************************************************************/
/******************************************************************************/

TFElement::add
(
	'F01',
	array
	(
		'label'																	=>	__('<i>[01]</i>Base','portada'),
		'description'															=>	__('Base font.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lora',
		'font_family_system'													=>  'Georgia,Serif',
		'font_size'																=>	array(15,15,15,15,15),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.73334em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'a',
		'body',
		'html .woocommerce div.product form.cart .variations label'
	)
);

TFElement::add
(
	'F02',
	array
	(
		'label'																	=>	__('<i>[02]</i>H1 header','portada'),
		'description'															=>	__('Use:<br/>- H1 header.','portada')
	),
	array
	(
		'font_family_google'													=>	'Playfair Display',
		'font_family_system'													=>  'Times New Roman,Serif',
		'font_size'																=>	array(48,48,48,28,28),
		'font_style'															=>	'italic',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.35715em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'h1',
		'h1 a',
		'h1.pb-header span.pb-header-content'
	)
);

TFElement::add
(
	'F03',
	array
	(
		'label'																	=>	__('<i>[03]</i>H2 header','portada'),
		'description'															=>	__('Use:<br/>- H2 header.','portada')
	),
	array
	(
		'font_family_google'													=>	'Playfair Display',
		'font_family_system'													=>  'Times New Roman,Serif',
		'font_size'																=>	array(28,28,28,24,24),
		'font_weight'															=>	'400',
		'line_height'															=>	'1.35715em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'h2',
		'h2 a',
		'h2.pb-header span.pb-header-content'
	)
);

TFElement::add
(
	'F04',
	array
	(
		'label'																	=>	__('<i>[04]</i>H3 header','portada'),
		'description'															=>	__('Use:<br/>- H3 header.','portada')
	),
	array
	(
		'font_family_google'													=>	'Playfair Display',
		'font_family_system'													=>  'Times New Roman,Serif',
		'font_size'																=>	array(24,24,24,20,20),
		'font_weight'															=>	'400',
		'line_height'															=>	'1.41667em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'h3',
		'h3 a',
		'h3.pb-header span.pb-header-content'
	)
);

TFElement::add
(
	'F05',
	array
	(
		'label'																	=>	__('<i>[05]</i>H4 header','portada'),
		'description'															=>	__('Use:<br/>- H4 header.','portada')
	),
	array
	(
		'font_family_google'													=>	'Playfair Display',
		'font_family_system'													=>  'Times New Roman,Serif',
		'font_size'																=>	array(18,18,18,18,18),
		'font_weight'															=>	'400',
		'line_height'															=>	'1.55556em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'h4',
		'h4 a',
		'h4.pb-header span.pb-header-content'
	)
);

TFElement::add
(
	'F06',
	array
	(
		'label'																	=>	__('<i>[06]</i>H5 header','portada'),
		'description'															=>	__('Use:<br/>- H5 header.','portada')
	),
	array
	(
		'font_family_google'													=>	'Playfair Display',
		'font_family_system'													=>  'Times New Roman,Serif',
		'font_size'																=>	array(17,17,17,17,17),
		'font_weight'															=>	'400',
		'line_height'															=>	'1.625em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'h5',
		'h5 a',
		'h5.pb-header span.pb-header-content'
	)
);

TFElement::add
(
	'F07',
	array
	(
		'label'																	=>	__('<i>[07]</i>H6 header','portada'),
		'description'															=>	__('Use:<br/>- H6 header.','portada')
	),
	array
	(
		'font_family_google'													=>	'Playfair Display',
		'font_family_system'													=>  'Times New Roman,Serif',
		'font_size'																=>	array(16,16,16,16,16),
		'font_weight'															=>	'400',
		'line_height'															=>	'1.71429em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'h6',
		'h6 a',
		'h6.pb-header span.pb-header-content'
	)
);

TFElement::add
(
	'F08',
	array
	(
		'label'																	=>	__('<i>[08]</i>Heading 1','portada'),
		'description'															=>	__('Use:<br/>- page header.','portada')
	),
	array
	(
		'font_family_google'													=>	'Playfair Display',
		'font_family_system'													=>  'Times New Roman,Serif',
		'font_size'																=>	array(28,28,28,24,24),
		'font_style'															=>	'italic',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.35715em',
		'letter_spacing'														=>	'0.25px'
	),
	array
	(
		'.theme-content-header h1'
	)
);

TFElement::add
(
	'F09',
	array
	(
		'label'																	=>	__('<i>[09]</i>Heading 2','portada'),
		'description'															=>	__('Use:<br/>- header of large post in blog,<br/>- header of single post.','portada')
	),
	array
	(
		'font_family_google'													=>	'Playfair Display',
		'font_family_system'													=>  'Times New Roman,Serif',
		'font_size'																=>	array(48,48,48,32,28),
		'font_style'															=>	'italic',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.25em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'.theme-post.theme-post-large .theme-post-title h2',
		'.theme-post.theme-post-large .theme-post-title h2 a',
		'.theme-post-single .theme-post .theme-post-title h1',
		'.theme-post-single .theme-post .theme-post-title h1 a'
	)
);

TFElement::add
(
	'F10',
	array
	(
		'label'																	=>	__('<i>[10]</i>Heading 3','portada'),
		'description'															=>	__('Use:<br/>- header of small post in blog.','portada')
	),
	array
	(
		'font_family_google'													=>	'Playfair Display',
		'font_family_system'													=>  'Times New Roman,Serif',
		'font_size'																=>	array(28,28,28,20,20),
		'font_style'															=>	'italic',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.35715em',
		'letter_spacing'														=>	'0.25px'
	),
	array
	(
		'.theme-post.theme-post-small .theme-post-title h2',
		'.theme-post.theme-post-small .theme-post-title h2 a'
	)
);

TFElement::add
(
	'F11',
	array
	(
		'label'																	=>	__('<i>[11]</i>Heading 4','portada'),
		'description'															=>	__('Use:<br/>- header of post "Summary" section,<br/>- header (author name) of post "About author" section,<br/>- header (author name) of comment.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(14,14,14,14,14),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.71429em',
		'letter_spacing'														=>	'0.75px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'.theme-post .theme-post-summary>div+span',
		'.theme-post .theme-post-author-info>span>a',
		'#comments #comments_list>ul>li .theme-comment-meta h6.theme-comment-meta-author',
		'#comments #comments_list>ul>li .theme-comment-meta h6.theme-comment-meta-author>a'
	)
);

TFElement::add
(
	'F12',
	array
	(
		'label'																	=>	__('<i>[12]</i>Heading 5','portada'),
		'description'															=>	__('Use:<br/>- header of widget,<br/>- header of section "Related posts",<br/>- header of comments list,<br/>- header of reply form,<br/>- wooCommerce: header of section "Product Description",<br/>- wooCommerce: header of section "Related Products",<br/>- wooCommerce: header of section "You may also like...",<br/>- wooCommerce: header of review list,<br/>- wooCommerce: header of review form.','portada')
	),
	array
	(
		'font_family_google'													=>	'Playfair Display',
		'font_family_system'													=>  'Times New Roman,Serif',
		'font_size'																=>	array(18,18,18,18,18),
		'font_style'															=>	'italic',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.55556em',
		'letter_spacing'														=>	'0.25px'
	),
	array
	(
		'.theme-widget>.theme-widget-header',
		'.theme-widget>.theme-widget-header a',
		'.theme-post .theme-post-related>h4',
		'#comments h4',
		'#respond #reply-title',
		'html .woocommerce div.product h4',
		'html .woocommerce div.product h4.pb-header span.pb-header-content'
	)
);

TFElement::add
(
	'F13',
	array
	(
		'label'																	=>	__('<i>[13]</i>Heading 6','portada'),
		'description'															=>	__('Use:<br/>- header of "Page Not Found" page (class theme-header-404)','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(144,144,144,144,96),
		'font_style'															=>	'normal',
		'font_weight'															=>	'300',
		'line_height'															=>	'1em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'.theme-header-404',
		'.pb-header.theme-header-404',
		'.pb-header.theme-header-404 span.pb-header-content'
	)
);

TFElement::add
(
	'F14',
	array
	(
		'label'																	=>	__('<i>[14]</i>Heading 7','portada'),
		'description'															=>	__('Use:<br/>- header of post in Revolution Slider','portada')
	),
	array
	(
		'font_family_google'													=>	'Playfair Display',
		'font_family_system'													=>  'Times New Roman,Serif',
		'font_size'																=>	array(42,42,32,24,20),
		'font_style'															=>	'italic',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.14286em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'.theme-header .theme-header-revolution-slider .theme-header-revolution-slider-box>div>div:first-child+div>h2',
		'.theme-header .theme-header-revolution-slider .theme-header-revolution-slider-box>div>div:first-child+div>h2>a'
	)
);

TFElement::add
(
	'F41',
	array
	(
		'label'																	=>	__('<i>[41]</i>Heading 8','portada'),
		'description'															=>	__('Use:<br/>- wooCommerce: header of product on product list in shop.','portada')
	),
	array
	(
		'font_family_google'													=>	'Playfair Display',
		'font_family_system'													=>  'Times New Roman,Serif',
		'font_size'																=>	array(24,24,24,20,20),
		'font_style'															=>	'italic',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.41667em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'html .woocommerce ul.products li.product h3'
	)
);

TFElement::add
(
	'F44',
	array
	(
		'label'																	=>	__('<i>[03]</i>Heading 9','portada'),
		'description'															=>	__('Use:<br/>- wooCommerce: product name on single product page.','portada')
	),
	array
	(
		'font_family_google'													=>	'Playfair Display',
		'font_family_system'													=>  'Times New Roman,Serif',
		'font_size'																=>	array(28,28,28,24,24),
		'font_style'															=>	'italic',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.35715em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'html .woocommerce div.product div.summary .product_title'
	)
);

TFElement::add
(
	'F15',
	array
	(
		'label'																	=>	__('<i>[15]</i>Post category','portada'),
		'description'															=>	__('Use:<br/>- post category.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(11,11,11,11,11),
		'font_style'															=>	'normal',
		'font_weight'															=>	'700',
		'line_height'															=>	'1.81819em',
		'letter_spacing'														=>	'2px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'.theme-post .theme-post-category>ul>li>a',
		'.theme-header .theme-header-revolution-slider .theme-header-revolution-slider-box>div>div:first-child',
		'.theme-header .theme-header-revolution-slider .theme-header-revolution-slider-box>div>div:first-child>a'
	)
);

TFElement::add
(
	'F17',
	array
	(
		'label'																	=>	__('<i>[17]</i>Post review counter','portada'),
		'description'															=>	__('Use:<br/>- post review counter.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lora',
		'font_family_system'													=>  'Georgia,Serif',
		'font_size'																=>	array(48,48,48,48,48),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'120px',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'.theme-post .theme-post-summary>div'
	)
);

TFElement::add
(
	'F18',
	array
	(
		'label'																	=>	__('<i>[18]</i>Paragraph large','portada'),
		'description'															=>	__('Use:<br/>- paragraph large.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lora',
		'font_family_system'													=>  'Georgia,Serif',
		'font_size'																=>	array(15,15,15,15,15),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.73334em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'p'
	)
);

TFElement::add
(
	'F19',
	array
	(
		'label'																	=>	__('<i>[19]</i>Paragraph small','portada'),
		'description'															=>	__('Use: <br/>- post excerpt in "small" posts,<br/>- post title in widget "(Portada theme) Most commented",<br/>- post title in widget "(Portada theme) Most Likes",<br/>- post title in widget "(Portada theme) Recent Posts",<br/>- post title in widget "Recent Comments",<br/>- post title in widget "Recent Posts",<br/>- post title in section "Related Posts",<br/>- entry title in widget "RSS",<br/>- text of widget "Text",<br/>- text of comment,<br/>- wooCommerce: header of product in widget "WooCommerce Products",<br/>- wooCommerce: header of product in widget "WooCommerce Cart" ,<br/>- wooCommerce: header of product in widget "WooCommerce Recently Viewed",<br/>- wooCommerce: header of product in widget "WooCommerce Recent Reviews",<br/>- wooCommerce: header of product in widget "WooCommerce Top Rated Products",<br/>- wooCommerce: content of review.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lora',
		'font_family_system'													=>  'Georgia,Serif',
		'font_size'																=>	array(14,14,14,14,14),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.714229em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'body.page-template.page-template-blog-grid .theme-blog>ul>li>div.theme-post-excerpt>p',
		'body.page-template.page-template-blog-list .theme-blog>ul>li>div.theme-post-excerpt>p',
		'body.page-template.page-template-blog-grid-leading-post .theme-blog>ul>li.theme-post-small>div.theme-post-excerpt>p',
		'body.page-template.page-template-blog-list-leading-post .theme-blog>ul>li.theme-post-small>div.theme-post-excerpt>p',
		'body.page-template.page-template-blog-grid .theme-blog>ul>li>div.theme-post-excerpt>p a',
		'body.page-template.page-template-blog-list .theme-blog>ul>li>div.theme-post-excerpt>p a',
		'body.page-template.page-template-blog-grid-leading-post .theme-blog>ul>li.theme-post-small>div.theme-post-excerpt>p a',
		'body.page-template.page-template-blog-list-leading-post .theme-blog>ul>li.theme-post-small>div.theme-post-excerpt>p a',
		'.widget_theme_widget_post_recent>ul>li>a',
		'.widget_theme_widget_post_most_comment>ul>li>a',
		'.widget_theme_widget_post_most_like>ul>li>a',
		'.widget_text>.textwidget',
		'.widget_text>.textwidget>p',
		'.widget_recent_entries>ul>li',
		'.widget_recent_entries>ul>li a',
		'.widget_recent_comments>ul>li',
		'.widget_recent_comments>ul>li a',
		'.widget_rss>ul>li>a',
		'#comments #comments_list>ul>li .theme-comment-content>p',
		'#comments #comments_list>ul>li .theme-comment-content .theme-comment-content-read-less-link',
		'#comments #comments_list>ul>li .theme-comment-content .theme-comment-content-read-more-link',
		'.theme-post .theme-post-related a.theme-post-related-title',
		'.theme-paragraph-small',
		'.theme-paragraph-small a',
		'.theme-revolution-slider-2>a',
		'html .woocommerce.widget_products>ul>li>a',
		'html .woocommerce.widget_shopping_cart .widget_shopping_cart_content>ul>li>a+a',
		'html .woocommerce.widget_recently_viewed_products>ul>li>a',
		'html .woocommerce.widget_recent_reviews>ul>li>a',
		'html .woocommerce.widget_top_rated_products>ul>li>a',
		'html .woocommerce div.product .pb-tab>.ui-tabs-panel>#reviews>#comments .commentlist>li>div>div>div.description>p'
	)
);

TFElement::add
(
	'F20',
	array
	(
		'label'																	=>	__('<i>[20]</i>Dropcap','portada'),
		'description'															=>	__('Use:<br/>- dropcap fist letter.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(52,52,52,52,52),
		'font_style'															=>	'normal',
		'font_weight'															=>	'300',
		'line_height'															=>	'1em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'p.pb-dropcap>span.pb-dropcap-first-letter',
		'.theme-post .theme-post-content>p:first-child:first-letter',
		'.theme-post .theme-post-excerpt.theme-post-excerpt-dropcap>p:first-child:first-letter'
	)
);

TFElement::add
(
	'F21',
	array
	(
		'label'																	=>	__('<i>[21]</i>Button label 1','portada'),
		'description'															=>	__('Use:<br/>- label of button 1,<br/>- label of links in "Menu 1" in footer.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(12,12,12,12,12),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.75em',
		'letter_spacing'														=>	'1.5px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'button',
		'input[type="submit"]',
		'input[type="button"]',
		'.theme-button-1',
		'.pb-button-style-1 a',
		'.theme-footer .theme-footer-menu-1 li a',
		'html .woocommerce a.button',
		'html .woocommerce input.button',
		'html .woocommerce button.button',
		'html .woocommerce #respond input#submit',
		'html #add_payment_method table.cart input[type="submit"]', 
		'html .woocommerce-cart table.cart input[type="submit"]', 
		'html .woocommerce-checkout table.cart input[type="submit"]',
		'html .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-default',
		'html .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-default a',
		'html .woocommerce .widget_price_filter .price_slider_amount .button'
	)
);

TFElement::add
(
	'F22',
	array
	(
		'label'																	=>	__('<i>[22]</i>Button label 2','portada'),
		'description'															=>	__('Use:<br/>- label of button 2.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(12,12,12,12,12),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.75em',
		'letter_spacing'														=>	'1.5px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'.theme-button-2',
		'.pb-button-style-2 a',
		'html .woocommerce a.added_to_cart',
		'html .woocommerce .quantity .plus',
		'html .woocommerce .quantity .minus',
		'html .woocommerce div.quantity .input-text'
	)
);

TFElement::add
(
	'F23',
	array
	(
		'label'																	=>	__('<i>[23]</i>Button label 3','portada'),
		'description'															=>	__('Use:<br/>- label of button 3.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(12,12,12,12,12),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.75em',
		'letter_spacing'														=>	'1.5px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'.theme-button-3'
	)
);

TFElement::add
(
	'F24',
	array
	(
		'label'																	=>	__('<i>[24]</i>Button label 4','portada'),
		'description'															=>	__('Use:<br/>- label of pagination buttons,<br/>- wooCommerce: label of pagination buttons.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(12,12,12,12,12),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.75em',
		'letter_spacing'														=>	'1.5px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'.theme-pagination>a',
		'.theme-pagination>span',
		'html .woocommerce nav.woocommerce-pagination ul.page-numbers li>a', 
		'html .woocommerce nav.woocommerce-pagination ul.page-numbers li>span', 
		'html .woocommerce-page nav.woocommerce-pagination ul.page-numbers li>a',
		'html .woocommerce-page nav.woocommerce-pagination ul.page-numbers li>span'
	)
);

TFElement::add
(
	'F25',
	array
	(
		'label'																	=>	__('<i>[25]</i>Author name 1','portada'),
		'description'															=>	__('Use:<br/>- name of author in post "Summary" section.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(11,11,11,11,11),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.81819em',
		'letter_spacing'														=>	'1px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'.theme-post .theme-post-summary>div+span+p+span'
	)
);

TFElement::add
(
	'F26',
	array
	(
		'label'																	=>	__('<i>[26]</i>Tags','portada'),
		'description'															=>	__('Use:<br/>- tags list,<br/>- wooCommerce: tag list.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(11,11,11,11,11),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.8em',
		'letter_spacing'														=>	'0.5px'
	),
	array
	(
		'.widget_tag_cloud>.tagcloud>a',
		'.theme-post .theme-post-tag>ul>li>a',
		'html .woocommerce.widget_product_tag_cloud>.tagcloud>a'
	)
);

TFElement::add
(
	'F27',
	array
	(
		'label'																	=>	__('<i>[27]</i>Label 1','portada'),
		'description'															=>	__('Use:<br/>- label of "Comments" phrase in post bar,<br/>- label of "Likes" phrase in post bar,<br/>- label of post navigation.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(12,12,12,12,12),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.75em',
		'letter_spacing'														=>	'1.5px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'.theme-post .theme-post-bar>.theme-post-bar-comment>span>a',
		'.theme-post .theme-post-bar>.theme-post-bar-like>span>a',
		'.theme-post .theme-post-navigation>a'
	)
);

TFElement::add
(
	'F28',
	array
	(
		'label'																	=>	__('<i>[28]</i>Label 2','portada'),
		'description'															=>	__('Use:<br/>- text in calendar widget,<br/>- links in widget "Meta",<br/>- links in widget "Pages",<br/>- links in widget "Archives",<br/>- links in widget "Categories",<br/>- links in widget "Custom Menu",<br/>- wooCommerce: category name and count of products in widget "WooCommerce Product Categories",<br/>- wooCommerce: count of products in widget "WooCommerce Average Rating Filter",<br/>- wooCommerce: links in sidebar menu navigation.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(12,12,12,12,12),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.5em',
		'letter_spacing'														=>	'1px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'.widget_meta>ul>li',
		'.widget_meta>ul>li a',
		'.widget_pages>ul>li',
		'.widget_pages>ul>li a',
		'.widget_archive>ul>li',
		'.widget_archive>ul>li a',
		'.widget_categories>ul>li',
		'.widget_categories>ul>li a',
		'.widget_nav_menu ul li',
		'.widget_nav_menu ul li a',
		'.widget_calendar table',
		'.widget_calendar table a',
		'html .woocommerce.widget_product_categories>ul>li',
		'html .woocommerce.widget_product_categories>ul>li a',
		'html .woocommerce.widget_rating_filter>ul>li>a>span+span',
		'html .woocommerce-page.woocommerce-account .woocommerce-MyAccount-navigation ul li',
		'html .woocommerce-page.woocommerce-account .woocommerce-MyAccount-navigation ul li a'
	)
);

TFElement::add
(
	'F29',
	array
	(
		'label'																	=>	__('<i>[29]</i>Label 3','portada'),
		'description'															=>	__('Use:<br/>- date of post in widget "(Portada Theme) Recent Posts",<br/>- date of post in widget "Recent Posts",<br/>- date of post in section "Related Posts",<br/>- date of post in component "Sitemap",<br/>- date of comment,<br/>- date of entry in widget "RSS",<br/>- number of likes in widget "(Portada Theme) Most Likes",<br/>- number of comments in widget "(Portada Theme) Most Commented",<br/>- author of comment in widget "Recent Comments",<br/>- author of entry in widget "RSS",<br/>- wooCommerce: price of product,<br/>- wooCommerce: author of review in widget "WooCommerce Recent Reviews",<br/>- wooCommerce: date and time of review in reviews list.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(11,11,11,11,11),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.81819em',
		'letter_spacing'														=>	'0.75px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'.widget_theme_widget_post_recent>ul>li>span',
		'.widget_theme_widget_post_most_comment>ul>li>span',
		'.widget_theme_widget_post_most_like>ul>li>span',
		'.widget_recent_entries>ul>li>span',
		'.widget_recent_comments>ul>li>span',
		'.widget_recent_comments>ul>li>span>a',
		'.widget_rss>ul>li>span.rss-date',
		'.widget_rss>ul>li>cite',
		'#comments #comments_list>ul>li .theme-comment-meta>.theme-comment-meta-date',
		'.pb-sitemap>ul>li>.pb-sitemap-date',
		'.theme-post .theme-post-related span.theme-post-related-date',
		'html .woocommerce.widget_shopping_cart .widget_shopping_cart_content>ul>li .quantity',
		'html .woocommerce.widget_products>ul>li .woocommerce-Price-amount',
		'html .woocommerce.widget_recently_viewed_products>ul>li .woocommerce-Price-amount',
		'html .woocommerce.widget_top_rated_products>ul>li .woocommerce-Price-amount',
		'html .woocommerce.widget_recent_reviews>ul>li>.reviewer',
		'html .woocommerce ul.products li.product .price',
		'html .woocommerce ul.products li.product .price ins',
		'html .woocommerce ul.products li.product .price del',
		'html .woocommerce div.product .pb-tab>.ui-tabs-panel>#reviews>#comments .commentlist>li>div>div>p.meta>time'
	)
);

TFElement::add
(
	'F30',
	array
	(
		'label'																	=>	__('<i>[30]</i>Label 4','portada'),
		'description'															=>	__('Use:<br/>- content in widget "RSS".','portada')
	),
	array
	(
		'font_family_google'													=>	'Lora',
		'font_family_system'													=>  'Georgia,Serif',
		'font_size'																=>	array(13,13,13,13,13),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.73334em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'.widget_rss>ul>li>div.rssSummary'
	)
);

TFElement::add
(
	'F31',
	array
	(
		'label'																	=>	__('<i>[31]</i>Label 5','portada'),
		'description'															=>	__('Use:<br/>- footer menu (second and third),<br/>- footer bottom content.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(12,12,12,12,12),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.75em',
		'letter_spacing'														=>	'1px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'.theme-footer .theme-footer-menu-2',
		'.theme-footer .theme-footer-menu-2 a',
		'.theme-footer .theme-footer-bottom',
		'.theme-footer .theme-footer-bottom a'
	)
);

TFElement::add
(
	'F32',
	array
	(
		'label'																	=>	__('<i>[32]</i>Label 6','portada'),
		'description'															=>	__('Use:<br/>- "By" phrase in post author,<br/>- "to" phrase in post comment,<br/>- part of label of social profile button.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lora',
		'font_family_system'													=>  'Georgia,Serif',
		'font_size'																=>	array(12,12,12,12,12),
		'font_style'															=>	'italic',
		'font_weight'															=>	'400',
		'text_transform'														=>	'none'
	),
	array
	(
		'.theme-post .theme-post-author-date>a>span',
		'.theme-footer .theme-footer-bottom em',
		'.theme-footer .theme-footer-menu-1 li a>em',
		'.theme-header .theme-header-revolution-slider .theme-header-revolution-slider-box>div>div:first-child+div+div>div>span',
		'#comments #comments_list>ul>li .theme-comment-meta h6.theme-comment-meta-reply-to>span',
		'#comments #comments_list>ul>li .theme-comment-meta h6.theme-comment-meta-reply-to>a>span'
	)
);

TFElement::add
(
	'F16',
	array
	(
		'label'																	=>	__('<i>[16]</i>Label 7','portada'),
		'description'															=>	__('Use:<br/>- post author and date,<br/>- author of comment (reply to),<br/>- wooCommerce: author of review in reviews list.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(12,12,12,12,12),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.75em',
		'letter_spacing'														=>	'1px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'.theme-post .theme-post-author-date',
		'.theme-post .theme-post-author-date a',
		'.theme-header .theme-header-revolution-slider .theme-header-revolution-slider-box>div>div:first-child+div+div>div',
		'#comments #comments_list>ul>li .theme-comment-meta h6.theme-comment-meta-reply-to',
		'#comments #comments_list>ul>li .theme-comment-meta h6.theme-comment-meta-reply-to>a',
		'html .woocommerce div.product .pb-tab>.ui-tabs-panel>#reviews>#comments .commentlist>li>div>div>p.meta>strong'
	)
);

TFElement::add
(
	'F42',
	array
	(
		'label'																	=>	__('<i>[42]</i>Label 8','portada'),
		'description'															=>	__('Use:<br/>- wooCommerce: number of products in cart','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(10,10,10,10,10),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'15px',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'.theme-woocommerce-icon>span'
	)
);

TFElement::add
(
	'F43',
	array
	(
		'label'																	=>	__('<i>[43]</i>Label 9','portada'),
		'description'															=>	__('Use:<br/>- wooCommerce: price of product in single product template','portada')
	),
	array
	(
		'font_family_google'													=>	'Lora',
		'font_family_system'													=>  'Georgia,Serif',
		'font_size'																=>	array(18,18,18,18,18),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'html .woocommerce div.product p.price',
		'html .woocommerce div.product span.price',
		'html .woocommerce div.product p.price ins',
		'html .woocommerce div.product span.price ins'
	)
);

TFElement::add
(
	'F33',
	array
	(
		'label'																	=>	__('<i>[33]</i>Input and dropdown fields','portada'),
		'description'															=>	__('Use:<br/>- input and dropdown fields.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(14,14,14,14,14),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.71429em',
		'letter_spacing'														=>	'0.25px',
	),
	array
	(
		'input',
		'select',
		'textarea',
		'.theme-infield-label',
		'.dk_container .dk_toggle .dk_label',
		'.dk_container .dk_options .dk_options_inner li a',
		'html #add_payment_method table.cart td.actions .coupon .input-text', 
		'html .woocommerce-cart table.cart td.actions .coupon .input-text', 
		'html .woocommerce-checkout table.cart td.actions .coupon .input-text'
	)
);

TFElement::add
(
	'F34',
	array
	(
		'label'																	=>	__('<i>[34]</i>Input label 1','portada'),
		'description'															=>	__('Use:<br/>- input label 1.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(12,12,12,12,12),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.75em',
		'letter_spacing'														=>	'0.75px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'label.theme-infield-label',
		'.pb-contact-form>div>ul>li label.pb-infield-label',
		'html .woocommerce form .form-row label', 
		'html .woocommerce-page form .form-row label',
		'html .woocommerce #commentform label'
	)
);

TFElement::add
(
	'F35',
	array
	(
		'label'																	=>	__('<i>[35]</i>Input label 2','portada'),
		'description'															=>	__('Use:<br/>- label for input in widget "Search",<br/>- label for input in widget "MailChimp Sign-Up Form",<br/>- label for input in top search field.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(12,12,12,12,12),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.75em',
		'letter_spacing'														=>	'0.5px',
		'text_transform'														=>	'none'
	),
	array
	(
		'.widget_search #searchform>div>label',
		'.widget_mc4wp_form_widget label',
		'.theme-header .theme-header-top-bar-search>form>div>label',
		'.theme-post-password-form>div>label'
	)
);

TFElement::add
(
	'F36',
	array
	(
		'label'																	=>	__('<i>[36]</i>QTip label','portada'),
		'description'															=>	__('Use:<br/>- QTip label.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lora',
		'font_family_system'													=>  'Georgia,Serif',
		'font_size'																=>	array(13,13,13,13,13),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.73334em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'.qtip.pb-qtip.pb-qtip-error',
		'.qtip.pb-qtip.pb-qtip-success'
	)
);

TFElement::add
(
	'F37',
	array
	(
		'label'																	=>	__('<i>[37]</i>Menu item','portada'),
		'description'															=>	__('Use:<br/>- menu item.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(14,14,14,12,12),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'24px',
		'letter_spacing'														=>	'1px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'.theme-header-menu .theme-header-menu-default>.sf-menu>li>a',
		'.theme-header-menu .theme-header-menu-responsive>ul>li>a'
	)
);

TFElement::add
(
	'F38',
	array
	(
		'label'																	=>	__('<i>[38]</i>Submenu item','portada'),
		'description'															=>	__('Use:<br/>- submenu item.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(12,12,12,12,12),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'20px',
		'letter_spacing'														=>	'1px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'.theme-header-menu .theme-header-menu-default>.sf-menu li>ul li a',
		'.theme-header-menu .theme-header-menu-responsive>ul>li ul li a'
	)
);

TFElement::add
(
	'F39',
	array
	(
		'label'																	=>	__('<i>[39]</i>Blockquote','portada'),
		'description'															=>	__('Use:<br/>- blockquote text.','portada')
	),
	array
	(
		'font_family_google'													=>	'Playfair Display',
		'font_family_system'													=>  'Times New Roman,Serif',
		'font_size'																=>	array(21,21,21,20,20),
		'font_style'															=>	'italic',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.75em',
		'letter_spacing'														=>	'0px'
	),
	array
	(
		'blockquote',
		'blockquote p',
        '.wp-block-quote.is-large p',
        '.wp-block-quote.is-style-large p',
		'.pb-blockquote .pb-blockquote-line-top::after'
	)
);

TFElement::add
(
	'F40',
	array
	(
		'label'																	=>	__('<i>[40]</i>Blockquote author','portada'),
		'description'															=>	__('Use:<br/>- blockquote author.','portada')
	),
	array
	(
		'font_family_google'													=>	'Lato',
		'font_family_system'													=>  'Arial,Sans-Serif',
		'font_size'																=>	array(11,11,11,11,11),
		'font_style'															=>	'normal',
		'font_weight'															=>	'400',
		'line_height'															=>	'1.81819em',
		'letter_spacing'														=>	'1px',
		'text_transform'														=>	'uppercase'
	),
	array
	(
		'.pb-blockquote .pb-blockquote-author',
        '.page-gutenberg-block .wp-block-quote cite',
        '.page-gutenberg-block .wp-block-pullquote__citation', 
        '.page-gutenberg-block .wp-block-pullquote cite', 
        '.page-gutenberg-block .wp-block-pullquote footer'
	)
);