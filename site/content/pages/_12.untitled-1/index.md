components:
  - 
    type: standard_header
    header_data:
      - 
        header_title: Masthead
        header_subtitle: 'With: Image background. Optional Navigation. Centered Text'
  - 
    type: masthead
    image_background: /assets/backgrounds/blog-main-1485428286.jpg
    show_navigation_bar: true
    filter_name: no_filter
    form_title: Default Form Title
    form_action: https://precursive.com/
    form_action_text: Submit
    form_success_message: Form has been sent successfully!
    text: |
      # Beautifully designed resource planning in Salesforce
      
      ### The key to project success and making customers happy
  - 
    type: standard_header
    header_data:
      - 
        header_title: Masthead
        header_subtitle: 'With: Image background. Optional Navigation. Form enables'
  - 
    type: masthead
    image_background: /assets/backgrounds/blog-offsite-1485428287.jpg
    show_navigation_bar: true
    show_form: true
    filter_name: no_filter
    form_title: Form title text
    form_action: https://precursive.com/
    form_action_text: Submit
    form_success_message: Form has been sent successfully!
    text: |
      # Beautifully designed resource planning in Salesforce
      
      ### The key to project success and making customers happy
  - 
    type: standard_header
    header_data:
      - 
        header_title: CTA with links
        header_subtitle: >
          Used as Nav. Could be just a block without the nav. On the right can be an image, video or just
          centered text
  - 
    type: link_CTA
    show_angle: true
    show_navigation_bar: true
    text: |
      # Beautifully designed resource planning in Salesforce
      
      ### The key to project success and making customers happy
    show_button_1: true
    button_1_data:
      - 
        url_redirection: https://precursive.com/
        button_text: Do this
    show_button_2: true
    button_2_data:
      - 
        url_redirection: https://precursive.com/
        button_text: Or This
    video_on_the_right_subtitle: This is a message at the bottom of the video
    distribution: 2
    image_on_the_right: /assets/features/project-accounting.png
  - 
    type: standard_header
    header_data:
      - 
        header_title: Contact form (same as on contact page)
        header_subtitle: Has optional fields and with a developers help can add new forms.
  - 
    type: contact_form
    show_contact_form: true
    contact_type: 1
    form_success_message: Thank you !
    contact_form_header_text: Getting in touch with the team is easy
    contact_form_action: https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8
    contact_form_data:
      - 
        oid: 00DD0000000DBV2
        returl: http://precursive.com/contact-success
        oidmessage: 00ND0000006QJTk
    contact_form_action_text: Submit
    show_contact_us: true
    contact_us_header: Other ways to contact us
  - 
    type: standard_header
    header_data:
      - 
        header_title: Demo CTA (Form on the right)
        header_subtitle: Header Subtitle
  - 
    type: demo_CTA
    text: |
      ### Beautifully designed resource planning in Salesforce
      
      # The key to project success and making customers happy
    form_data:
      - 
        form_action: Action URL
        oid: SalesforceID
        returl: Redirection URL
    form_action_text: Book a demo
    image_background: /assets/backgrounds/girl-smile-1485428288.jpg
  - 
    type: standard_header
    header_data:
      - 
        header_title: Full width image
        header_subtitle: Has optional caption
  - 
    type: image
    image: /assets/events/sydney/Screen Shot 2017-05-11 at 20.56.08.png
  - 
    type: standard_header
    header_data:
      - 
        header_title: Image (Multi Column)
        header_subtitle: This can have 1,2 or three columns with text
  - 
    type: multi_columns
    columns_to_display: 2
    multi_columns_grid:
      - 
        image: /assets/events/London/SFWT-London_Afterparty.png
        text: |
          # SF London
          Something about the event etc
      - 
        image: /assets/events/newyork/NYC-liberty-01.png
        text: |
          # SF NYC
          Something about the event etc
      - 
        image: /assets/events/sydney/sales-force-world-tour-img.jpg
        text: |
          # SF Sydney
          Something about the event etc
  - 
    type: standard_header
    header_data:
      - 
        header_title: 'Image & Text'
        header_subtitle: Positioned top. The background color is custom, Text centering, image can have captions
  - 
    type: image_and_text
    image: /assets/Screen Shot 2017-05-11 at 20.55.31.png
    text: |
      This is with the image on the top.
      This module allows you to move the image to any position: Top, Left, Bottom or right. There's also an option to center the text ❤️
    background_color: '#f7f7f7'
    distribution: 1
    is_centered: true
  - 
    type: standard_header
    header_data:
      - 
        header_title: 'Image & Text'
        header_subtitle: Positioned Left
  - 
    type: image_and_text
    image: /assets/Screen Shot 2017-05-11 at 21.05.46.png
    caption: Be Cool with a caption
    text: |
      This is with the image on the top.
      This module allows you to move the image to any position: Top, Left, Bottom or right. There's also an option to center the text ❤️
    distribution: 4
  - 
    type: standard_header
    header_data:
      - 
        header_title: Block Quote
        header_subtitle: Text with link
  - 
    type: blockquote
    quote: 'OMG This app is so great. Buy it now. '
    source: www.source.com
  - 
    type: standard_header
    header_data:
      - 
        header_title: Download Guide
        header_subtitle: Option to have a download cta
  - 
    type: download_guide
    text: |
      # Download the Guide to Buying Resource Management Software
      
      ### Considering purchasing resource management software? This guide will take you through best practices for each step in the process, from building a business case to preparing for implementation.
    form_heading: Download the guide now
    form_data:
      - 
        action_url: https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8
        oid: 00DD0000000DBV2
        ret_url: http://precursive.com/buying-guide-success
        button_text: Download
  - 
    type: standard_header
    header_data:
      - 
        header_title: Paragraph
        header_subtitle: "This is a super flexible section that can take any markdown - images etc. If you want all the text cetered - there's an option for that 🥁"
  - 
    type: paragraph
    text: |
      Markdown is a text-to-HTML markup syntax for web writers. Markdown allows you to write using an easy-to-read, easy-to-write plain text format that is converted to structurally valid HTML.
      
      ## Headers
      
      # This is an h1
      ## This is an h2
      ## This is an h3, and so on.
      
      ## Bold & Italic
      
      You can make things *emphasized*, **bold**, or _**both**_.
      Links
      
      This is an [example link](http://example.com).
      Code
      
      
      ## Quoting
      
      Create a blockquote by starting your text with > .
      
      > This is going to be a blockquote.
      Images
      
      ![alt text](https://media-speakerfile-pre.s3.amazonaws.com/images_avatars/3823c76317907e75bd04b770eb080fb11374137647_l.jpeg)
      
      ## Unordered List
      
      - Bacon
      - Steak
      - Beer
      
      ## Ordered List
      
      1. Eat
      2. Drink
      3. Be merry
  - 
    type: standard_header
    header_data:
      - 
        image: /assets/Brand/integ-salesforce.png
        header_title: Header has a title
        header_subtitle: A subtitle and type types of separator lines (full width shown here and image
        full_width_separator_line: true
  - 
    type: standard_header
    header_data:
      - 
        header_title: Header with no image
        header_subtitle: Subtitle and Separator line
        show_separator_line: true
  - 
    type: standard_header
    header_data:
      - 
        header_title: Carousel
        header_subtitle: "With multi slides. If you only have one you'll have this layout without navigation"
  - 
    type: top_picks
    top_picks_title: Title
    top_picks_subtitle: Subtitle 🇦🇺
    top_picks_grid:
      - 
        image: /assets/events/London/SFWT-London_Afterparty.png
        text: |
          Event 1 and all that kinda stuff. (it takes markdown)
          
          # This is an h1
          ## This is an h2
          ## This is an h3, and so on.
      - 
        image: /assets/events/newyork/EmpireState_533x533.png
        text: 'And another one. If you only add one slide then there it no arrows. '
title: Custom Components v2
fieldset: super_replicator
template: custom_components
id: 16df39c9-feb3-4080-bf8d-b74e180339f0
