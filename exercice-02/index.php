< ?php function showSocialNetwork($link){ extract( shortcode_atts( array( 'facebook'=> '',
    'instagram' => '',
    'linkedin' => '',
    'github' => ''
    ),
    $link
    )
    );

    $socialNetworkList=`
    <ul>
        <li>Facebook : "'.$facebook.'"</li>
        <li>Instagram.com : "'.$instagram.'"</li>
        <li>Linkedin : "'.$linkedin.'"</li>
        <li>GitHub : "'.$github.'"</li>
    </ul>
    `;
    return $socialNetworkList;
    };

    add_shortcode('show_social_network','showSocialNetwork');

    ?>
    <!-- 
sur wordpressil me suffira d'insérer le shortcode suivant:
[show_social_network facebook="https://facebook.com" instagram="https://instagram.com" linkedin="https://www.linkedin.com" github="https://github.com/honoagency"] 
-->