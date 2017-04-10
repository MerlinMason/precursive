components:
  -
    type: contact_form
    contact_form_header_text: Getting in touch with the team is easy
    contact_form_action: https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8
    contact_form_data:
      -
        oid: 00DD0000000DBV2
        returl: http://precursive.com/contact-success
        oidmessage: 00ND0000006QJTk
    contact_form_action_text: Submit
    contact_us_header: Other ways to contact us
    show_contact_us: true
  -
    type: image
    image:
      - /assets/29_-_introducing_Salesforce_DX_qklwxw-1488882866.png
    caption: This is text on the image
  -
    type: masthead
    filter_name: no_filter
    form_title: Default Form Title
    form_action: https://precursive.com/
    form_action_text: Submit
    form_success_message: Form has been sent successfully!
    text: |
      # This is text
      ## This is text 2
      ### This is text 3
      This is normal text
    image_background:
      - /assets/2_hub_article_banner_672x357px_eng_no_title_v2_tcm1374-492843_1.jpg
    show_navigation_bar: true
  -
    type: demo_CTA
    text: |
      # This is the title
      ## This is the subtitle

      Some text
    form_data_grid:
      -
        form_action: https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8
        oid: 00DD0000000DBV2
        returl: http://precursive.com/demo-success
    form_action_text: Book a demo
    image_background:
      - /assets/backgrounds/girl-smile-1485428288.jpg
    form_data:
      -
        form_action: Action URL
        oid: SalesforceID
        returl: Redirection URL
  -
    type: link_CTA
    image_background:
      - /assets/29_-_introducing_Salesforce_DX_qklwxw-1488882866.png
    show_navigation_bar: true
    show_precursive_logo: true
    text: |
      ## Here is the Text
      More text
    show_button_1: true
    button_1_data:
      -
        url_redirection: '#'
        button_text: Go To Page
    show_button_2: true
    button_2_data:
      -
        url_redirection: '#'
        button_text: Go To Page
    show_video_or_image: 1
    video_on_the_right:
      - /assets/Avatars.jpg
    image_on_the_right:
      - /assets/Avatars.jpg
    video_on_the_right_subtitle: This is a message at the bottom of the video
    show_angle: true
title: Custom Components
fieldset: super_replicator
template: custom_components
id: db63e5ee-c22f-4a9f-8ed7-8d6c06cddbf2
