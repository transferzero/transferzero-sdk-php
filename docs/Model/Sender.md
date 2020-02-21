# # Sender

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**type** | **string** | Type of sender to create - either person or business (defaults to person) | [optional] 
**state** | [**\TransferZero\Model\SenderState**](SenderState.md) |  | [optional] 
**country** | **string** | Country of sender in 2-character alpha ISO 3166-2 country format | 
**street** | **string** | Sender&#39;s street | 
**postal_code** | **string** | Zip code of sender | 
**city** | **string** | Sender&#39;s city | 
**phone_country** | **string** | Phone country of sender in 2-character alpha ISO 3166-2 country format | 
**phone_number** | **string** | Phone number of sender (without country callcode) | [optional] 
**email** | **string** | Email of sender | 
**ip** | **string** | IP of sender | 
**address_description** | **string** | Description of address | [optional] 
**identification_number** | **string** | Identification number of document used | [optional] 
**identification_type** | **string** | Document to be identified. The identification type can be one of the following:  - &#x60;DL&#x60;: Driving License - &#x60;PP&#x60;: International Passport - &#x60;ID&#x60;: National ID - &#x60;OT&#x60;: Other | [optional] 
**name** | **string** | Name of sender (used only with a Business sender) | [optional] 
**first_name** | **string** | First name of sender (used only with a Personal sender) | [optional] 
**middle_name** | **string** | Middle name of sender (used only with a Personal sender) | [optional] 
**last_name** | **string** | Last name of sender (used only with a Personal sender) | [optional] 
**birth_date** | [**\DateTime**](\DateTime.md) | Date of birth of sender (used only with a Personal sender) | [optional] 
**occupation** | **string** | Occupation of sender (used only with a Personal sender) | [optional] 
**nationality** | **string** | The nationality of the sender (used only with a Personal sender) | [optional] 
**legal_entity_type** | **string** | Legal entity type (used only with a Business sender) | [optional] 
**registration_date** | **string** | The registration date (used only with a Business sender) | [optional] 
**registration_number** | **string** | The registration number (used only with a Business sender) | [optional] 
**nature_of_business** | **string** | Nature of business options (used only with a Business sender) | [optional] 
**source_of_funds** | **string** | The source of funds | [optional] 
**core_business_activities** | **string** | The core activities (used only with a Business sender) | [optional] 
**purpose_of_opening_account** | **string** | The purpose for opening their account (used only with a Business sender) | [optional] 
**office_phone** | **string** | The official phone number (used only with a Business sender) | [optional] 
**vat_registration_number** | **string** | The VAT registration number (used only with a Business sender) | [optional] 
**financial_regulator** | **string** | The Financial Regulator (used only with a Business sender) | [optional] 
**regulatory_licence_number** | **string** | The Regulatory Licence Number (used only with a Business sender) | [optional] 
**contact_person_email** | **string** | The contact&#39;s email address (used only with a Business sender) | [optional] 
**trading_country** | **string** | The Business trading country (used only with a Business sender) | [optional] 
**trading_address** | **string** | The Business trading address (used only with a Business sender) | [optional] 
**documents** | [**\TransferZero\Model\Document[]**](Document.md) | Needed for KYC checks. Required to approve the sender unless KYC is waived for your account. Please send us an empty list of documents: &#x60;\&quot;documents\&quot;: [ ]&#x60; in the request if KYC has been waived.  If the documents already exist, please send the Document ID eg. &#x60;&#x60;&#x60;JSON \&quot;documents\&quot;: [   {     \&quot;id\&quot;: \&quot;b6648ba3-1c7b-4f59-8580-684899c84a07\&quot;   } ] &#x60;&#x60;&#x60; | 
**politically_exposed_people** | [**\TransferZero\Model\PoliticallyExposedPerson[]**](PoliticallyExposedPerson.md) | A list of politically exposed people, individuals who are or have been entrusted with prominent public functions by a country, for example heads of state or heads of government, senior politicians, senior government, judicial or military officials, senior executives of state owned corporations, important political party officials.  There is a limit of three (3) politically exposed people per Sender.  Politically exposed person example: &#x60;&#x60;&#x60;json   {     \&quot;name\&quot;: \&quot;Ronald Reagan\&quot;,     \&quot;position\&quot;: \&quot;President of the United States\&quot;,     \&quot;started_date\&quot;: \&quot;1981-01-20T00:00:00.000Z\&quot;,     \&quot;ended_date\&quot;: \&quot;1989-01-20T00:00:00.000Z\&quot;   } &#x60;&#x60;&#x60; | [optional] 
**metadata** | [**object**](.md) | Metadata of sender. You can store any detail specific to your integration here (for example the local ID of the sender on your end). When requesting sender details you will receive the sent metadata back. Also when sending sender related webhooks you will receive the details stored here as well. | [optional] 
**errors** | [**map[string,\TransferZero\Model\ValidationErrorDescription[]]**](array.md) | The fields that have some problems and don&#39;t pass validation | [optional] 
**onboarding_status** | **string** | The onboarding status of the sender | [optional] 
**external_id** | **string** | Optional ID that is supplied by partner linking it to the partner&#39;s own Sender ID. Note: if present we will validate whether the sent ID is a duplicate in our system or not. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


