<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Authentication
 * @method Api\AuthenticationApi getClient()
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method Api\AuthenticationApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method void deleteSocialLogin(string $user_id, Models\SocialAccountInformation $social_account_information = null) Deletes user
 * @method Models\OauthAccess getOAuthToken() Creates an authorization token
 * @method Models\UserSocialIdResult listSocialLogins(string $user_id) Gets a list of a user
 * @method Api\AuthenticationApi\LoginOptions loginOptions(array $options = ['set_api_password' => null, 'set_embed_account_id_guid' => null, 'set_include_account_id_guid' => null, 'set_login_settings' => null])
 * @method Models\LoginInformation login(Api\AuthenticationApi\LoginOptions $options = null) Gets login information for a specified user
 * @method void revokeOAuthToken() Revokes an authorization token
 * @method void updatePassword(string $login_part, Models\UserPasswordInformation $user_password_information = null) Updates the password for a specified user is supported
 * @method void updateSocialLogin(string $user_id, Models\SocialAccountInformation $social_account_information = null) Adds social account for a user
 */
class Authentication extends BaseApi
{
    protected $methodsWithAccountId = [
        'deleteSocialLogin',
        'deleteSocialLoginWithHttpInfo',
        'listSocialLogins',
        'listSocialLoginsWithHttpInfo',
        'updateSocialLogin',
        'updateSocialLoginWithHttpInfo'
];
}