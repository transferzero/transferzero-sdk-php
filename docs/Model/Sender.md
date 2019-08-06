# # Sender

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of sender to create - either person or business (defaults to person) | [optional] 
**country** | **string** | Country of sender in 2-character alpha ISO 3166-2 country format | 
**phone_country** | **string** | Phone country of sender in 2-character alpha ISO 3166-2 country format | 
**phone_number** | **string** | Phone number of sender (without country callcode) | [optional] 
**email** | **string** | Email of sender | 
**first_name** | **string** | First name of sender (used only with a Personal sender) | [optional] 
**middle_name** | **string** | Middle name of sender (used only with a Personal sender) | [optional] 
**last_name** | **string** | Last name of sender (used only with a Personal sender) | [optional] 
**occupation** | **string** | Occupation of sender (used only with a Personal sender) | [optional] 
**nationality** | **string** | The nationality of the sender (used only with a Personal sender) | [optional] 
**onboarding_status** | **string** | The onboarding status of the sender | [optional] 
**address** | **string** | The address of the sender | [optional] 
**description** | **string** | Description of the sender | [optional] 
**name** | **string** | Name of sender (used only with a Business sender) | [optional] 
**city** | **string** | Sender&#39;s city | 
**street** | **string** | Sender&#39;s street | 
**address_description** | **string** | Description of address | [optional] 
**postal_code** | **string** | Zip code of sender | 
**birth_date** | [**\DateTime**](\DateTime.md) | Date of birth of sender | [optional] 
**ip** | **string** | IP of sender | 
**identification_number** | **string** | Identification number of document used | [optional] 
**identification_type** | **string** | Document to be identified. The identification type can be one of the following:  - &#x60;DL&#x60;: Driving License - &#x60;PP&#x60;: International Passport - &#x60;ID&#x60;: National ID - &#x60;OT&#x60;: Other | [optional] 
**documents** | [**\TransferZero\Model\Document[]**](Document.md) | Needed for KYC checks. Required to approve the sender unless KYC is waived for your account. Please send us an empty list of documents: &#x60;\&quot;documents\&quot;: [ ]&#x60; in the request if KYC has been waived.  If the documents already exist, please send the Document ID eg. &#x60;&#x60;&#x60;JSON \&quot;documents\&quot;: [   {     \&quot;id\&quot;: \&quot;b6648ba3-1c7b-4f59-8580-684899c84a07\&quot;   } ] &#x60;&#x60;&#x60; | 
**metadata** | [**object**](.md) | Metadata of sender. You can store any detail specific to your integration here (for example the local ID of the sender on your end). When requesting sender details you will receive the sent metadata back. Also when sending sender related webhooks you will receive the details stored here as well. | [optional] 
**state** | [**\TransferZero\Model\SenderState**](SenderState.md) |  | [optional] 
**id** | **string** |  | [optional] 
**external_id** | **string** | Optional ID that is supplied by partner linking it to the partner&#39;s own Sender ID. Note: if present we will validate whether the sent ID is a duplicate in our system or not. | [optional] 
**errors** | [**map[string,\TransferZero\Model\ValidationErrorDescription[]]**](array.md) | The fields that have some problems and don&#39;t pass validation | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


