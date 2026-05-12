# # Mandate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the mandate | [optional] 
**status** | **string** | Current state of the mandate.  - &#x60;pending&#x60; — created, awaiting signing flow - &#x60;notified&#x60; — recipient has been notified to sign - &#x60;signed&#x60; — recipient signed; mandate is active - &#x60;failed&#x60; — signing flow failed (e.g. AVS/CDV rejection) - &#x60;bypassed&#x60; — administratively bypassed for an inward AZA payment | [optional] 
**type_id** | **int** | Numeric beneficiary type identifier. Identifies whether the mandate was issued for a natural person, sole proprietor, partnership, company, etc. | [optional] 
**reference** | **string** | Human-readable reference assigned to the mandate at creation. | [optional] 
**signed_at** | [**\DateTime**](\DateTime.md) | Timestamp when the mandate transitioned to &#x60;signed&#x60;. &#x60;null&#x60; for mandates that are pending, notified, failed, or bypassed. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Timestamp when the mandate was created. | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Timestamp when the mandate was last updated. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


