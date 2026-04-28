# # PromotionSetupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**workflow_schedule_id** | **int** |  |
**client_id** | **int** |  |
**campaign_id** | **int** |  | [optional]
**domain** | **string** |  |
**cpanel_username** | **string** |  |
**cpanel_ip** | **string** |  |
**cpanel_password** | **string** |  |
**db** | [**\IdpluggerPromotionAdmin\Model\PromotionSetupRequestDb**](PromotionSetupRequestDb.md) |  |
**monitor_url** | **string** |  | [optional]
**callback_url** | **string** |  |
**callback_token** | **string** |  |
**cpanel_ssh_port** | **int** | Porta SSH do servidor cPanel (padrão: 22200) | [optional]
**admin_users** | [**\IdpluggerPromotionAdmin\Model\PromotionSetupRequestAdminUsersInner[]**](PromotionSetupRequestAdminUsersInner.md) | Usuários do workflow a cadastrar como root na plataforma. Se omitido ou vazio, nenhum usuário é criado. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
