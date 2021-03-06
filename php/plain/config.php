<?php

function getConfig()
{
    return array(

        // =========================================================================================
        // Application Settings
        // =========================================================================================

        // Trust in Lacuna Test PKI (for development purposes only!)
        "trustLacunaTestRoot" => true,
        // THIS SHOULD NEVER BE USED ON A PRODUCTION ENVIRONMENT!

        // -----------------------------------------------------------------------------------------
        // REST PKI
        // -----------------------------------------------------------------------------------------
        'restPki' => [

            // ====================================================
            //     >>>> PASTE YOUR REST PKI ACCESS TOKEN BELOW <<<<
            // ====================================================
            'accessToken' => 'mMSYnnHBv16Ot9wnyxvWnP0DvWU7EBocqgkFmLKLJJP-AxXg4v2Y8zRUq_cwjHSZ3limpYAWoanT8_24Bg6tLs90_Pw61ikaew-IFVPBa_aFb_GRMuUPxoNtzujyy_Jd8s5vFWGgPE_0PLrsuLmJ-DKQPD15TWYZOyjdt6xTAq1SBUtdvzGjzpsxvTJXxGl7tgTpqO2L9_4AG2K2WR1AR3s4xHhKbeL3TKDZEAXmjCQ2CtmCBeALQdR8oQ1Jf_ypPg5_Ssxrs223TSN4vEo4iD2hxd9ydEl7vEKuj6PUA71XWThWLOiP6p-PRI-piW1E5tBJ_z4IlE47SogmgHQE_vereiKCDxbsjrAxQXWxzMheHpS6o3tJbP5M4NjtdKhtOa083X9L9QNfLw8O0zrczMeO3HAvR8dC9SDnot7b6am1JRtdpFSCgkSq7RtFyTDX2G7o15uJXeYqGfQDWFkqiKbPRXEbG_y-vLHG-OaZU3hDNvf9wuLCatDm6dgEF51InMHkBw',
            // This is a TRIAL token. It will be expired at 31/03/2021.
            // If the REST PKI sample doesn't work, please contact our support by email: suporte@lacunasoftware.com

            // Address of your Rest PKI installation (with the trailing '/' character)
            "endpoint" => 'https://pki.rest/',
        ],

        // -----------------------------------------------------------------------------------------
        // REST PKI NG
        // -----------------------------------------------------------------------------------------
        'restPkiNg' => [

            // ====================================================
            //     >>>> PASTE YOUR REST PKI API KEY BELOW <<<<
            // ====================================================
            'apiKey' => 'pki-suite-samples-01|aa0177874a83a54ab34ac91f554f75e3a9955a33f89e2c76432da4bdff4af040',
            // This is a TRIAL API KEY. It will be expired at 31/03/2021.
            // If the REST PKI NG sample doesn't work, please contact our support by email: suporte@lacunasoftware.com

            // Address of your Rest PKI NG installation (with the trailing '/' character)
            "endpoint" => 'https://core.pki.rest/',
        ],

        // -----------------------------------------------------------------------------------------
        // Amplia
        // -----------------------------------------------------------------------------------------
        'amplia' => [

            // The CA's id that will be used to issue a certificate using Amplia. We have configured
            // to the sample CA from sample subscription for these samples.
            'caId' => 'eaffa754-1fb5-474a-b9ef-efe43101e89f',

            // ======================================================
            //       >>>> PASTE YOUR AMPLIA API KEY BELOW <<<<
            // ======================================================
            'apiKey' => 'pki-suite-samples-01|3dbde2afd93c2d4392c8e16ae03e37aab050ed9b08b81b517beaf6a3d56dc2a0',
            // This is a TRIAL API key to use Amplia. It will expire at 31/03/2021.
            // If the Amplia's samples do not work please contact our support by email:
            // suporte@lacunasoftware.com

            // In order to use this sample on a "on premises" installation of Amplia, fill the
            // field below with the URL address of your REST PKI installation (with the trailing '/'
            // character).
            'endpoint' => null,
        ],

        // -----------------------------------------------------------------------------------------
        // PKI Express
        // ----------------------------------------------------------------------------------------

        "pkiExpress" => array(

            // List of custom trusted roots. In this sample, we will get the certificate files on
            // resources folder.
            "trustedRoots" => [],

            // Offline mode. Set this, if you want to PKI Express to run on offline mode. This mode
            // is useful when there is no network available.
            "offline" => false,

            # Default password to be used on generating a PKCS #12 file.
            "pkcs12Password" => "FZQkTVLy2MErFCu2H0e8Lq9QPW2cqEgMrp/PES9m5JZ9xej6mCheNtuK8bj/qLhMsV4PvPg2w964A8E/N2WaYA",
        ),

        // -----------------------------------------------------------------------------------------
        // Web PKI
        // -----------------------------------------------------------------------------------------

        "webPki" => array(

            // Base64-encoded binary license for the Web PKI. This value is passed to Web PKI
            // component's constructor.
            "license" => null
        )

    );
}