# # Sender

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**type** | **string** | Type of sender to create - either person or business (defaults to person) | [optional] 
**state** | [**\TransferZero\Model\SenderState**](SenderState.md) |  | [optional] 
**country** | **string** | Country of sender in 2-character alpha ISO 3166-2 country format. This is the residential country for personal senders and the country of incorporation for business senders. | 
**street** | **string** | Sender&#39;s street | 
**postal_code** | **string** | Zip code of sender | 
**city** | **string** | Sender&#39;s city | 
**phone_country** | **string** | Phone country of sender in 2-character alpha ISO 3166-2 country format | 
**phone_number** | **string** | Phone number of sender (without country callcode) | [optional] 
**email** | **string** | Email of sender | 
**ip** | **string** | IP of sender | 
**address_description** | **string** | Description of address | [optional] 
**identification_number** | **string** | Identification number of document used | [optional] 
**identification_type** | **string** | Document to be identified. The identification type can be one of the following:  - &#x60;DL&#x60;: Driving License - &#x60;PP&#x60;: International Passport - &#x60;ID&#x60;: National ID - &#x60;OT&#x60;: Other  Please note for Wizall &#x60;XOF::Cash&#x60; transactions the valid options are: - &#x60;ID&#x60;: National ID - &#x60;PP&#x60;: Passport | [optional] 
**lang** | **string** | Determines language of the served content. Defaults to English | [optional] 
**name** | **string** | Name of sender (used only with a Business sender) | [optional] 
**first_name** | **string** | First name of sender (used only with a Personal sender) | [optional] 
**middle_name** | **string** | Middle name of sender (used only with a Personal sender) | [optional] 
**last_name** | **string** | Last name of sender (used only with a Personal sender) | [optional] 
**birth_date** | [**\DateTime**](\DateTime.md) | Date of birth of sender (used only with a Personal sender) | [optional] 
**occupation** | **string** | Occupation of sender (used only with a Personal sender) | [optional] 
**nationality** | **string** | The nationality of the sender (used only with a Personal sender) | [optional] 
**legal_entity_type** | **string** | Legal entity type (used only with a Business sender)  Available values:   - sole_proprietorship: Sole Proprietorship   - partnership: Partnership   - privately_owned_company: Privately Owned Company (Limited Company)   - publicly_owned_company: Publicly Listed Company (PLC)   - government_owned_entity: Government Owned Entity Trusts   - trust: Foundations &amp; Similar Entities   - ngo: Non-Government Organisations / Charities inc Religious bodies and place of worship   - club_and_society: Clubs and Societies   - go: GO (Majority Owned Subsidiary of State-Owned Company)   - financial_institution: Financial Institution  Please note not all values are acceptable for some our corridors. Please reach out to our sales teams for more information.  Note that if you select &#x60;financial_institution&#x60; then the fields &#x60;vat_registration_number&#x60;, &#x60;financial_regulator&#x60; and &#x60;regulatory_licence_number&#x60; will be mandatory as well. | [optional] 
**registration_date** | [**\DateTime**](\DateTime.md) | The registration date (used only with a Business sender) | [optional] 
**registration_number** | **string** | The registration number (used only with a Business sender) | [optional] 
**nature_of_business** | **string** | Nature of business options (used only with a Business sender)  Available values:   - personal: Personal   - agriculture_and_hunting: Agriculture and Hunting   - forestry: Forestry   - fishing: Fishing   - agricultural_by_products: Agricultural By-Products   - coal_mining: Coal Mining   - oil_mining: Oil Mining   - iron_ore_mining: Iron Ore Mining   - other_metal_and_diamond_mining: Other Metal and Diamond Mining   - other_mineral_mining: Other Mineral Mining   - manufacturing_of_food_drink_tobacco: Manufacture of Food/Drink/Tobacco   - manufacturing_of_textiles_leather_fur_furniture: Manufacture of Textiles/Leather/Fur/Furniture   - manufacture_of_wooden_products_furniture: Manufacture of Wooden Products/Furniture   - manufacture_of_paper_pulp_allied_products: Manufacture of Paper/Pulp/Allied Products   - manufacture_of_chemicals_medical_petroleum_rubber_plastic_products: Manufacture Of Chemicals Medical Petroleum Rubber Plastic Products   - manufacture_of_pottery_china_glass_stone: Manufacture Of Pottery China Glass Stone   - manufacture_of_iron_steel_non_ferrous_metals_basic_industries: Manufacture Of Iron Steel Non-Ferrous Metals Basic Industries   - manufacture_of_metal_products_electrical_and_scientific_engineering: Manufacture Of Metal Products Electrical And Scientific Engineering   - manufacture_of_jewelry_musical_instruments_toys: Manufacture Of Jewelry Musical Instruments Toys   - electricity_gas_and_water: Electricity, Gas And Water   - construction: Construction   - wholesale_trade: Wholesale Trade   - retail_trade: Retail Trade   - catering_incl_hotels: Catering Incl. Hotels   - transport_storage: Transport Storage   - communications: Communications   - finance_and_holding_companies: Finance And Holding Companies   - insurance: Insurance   - business_services: Business Services   - real_estate_development_investment: Real Estate Development Investment   - central_state_governments: Central State Governments   - community_services_defence_police_prisons_etc: Community Services Defence Police Prisons Etc   - social_services_education_health_care: Social Services Education Health Care   - personal_services_leisure_services: Personal Services - Leisure Services   - personal_services_domestic_laundry_repairs: Personal Services - Domestic Laundry Repairs   - personal_services_embassies_international_organisations: Personal Services - Embassies | [optional] 
**source_of_funds** | **string** | The source of funds | [optional] 
**custom_source_of_funds** | **string** | Custom source of funds | [optional] 
**core_business_activity** | **string** | The core activity (used only with a Business sender) | [optional] 
**purpose_of_opening_account** | **string** | The purpose for opening their account (used only with a Business sender) | [optional] 
**office_phone** | **string** | The official phone number (used only with a Business sender) | [optional] 
**vat_registration_number** | **string** | The VAT registration number (used only with a Business sender) | [optional] 
**financial_regulator** | **string** | The Financial Regulator (used only with a Business sender) | [optional] 
**regulatory_licence_number** | **string** | The Regulatory Licence Number (used only with a Business sender) | [optional] 
**contact_person_email** | **string** | The contact&#39;s email address (used only with a Business sender) | [optional] 
**trading_country** | **string** | The Business trading country (used only with a Business sender) | [optional] 
**trading_address** | **string** | The Business trading address (used only with a Business sender) | [optional] 
**trading_name** | **string** | The Business trading name (used only with a Business sender) | [optional] 
**number_monthly_transactions** | **string** | The estimated number of monthly transactions (used only with a Business sender) | [optional] 
**amount_monthly_transactions** | **string** | The estimated amount for all transactions each month in USD (used only with a Business sender) | [optional] 
**documents** | [**\TransferZero\Model\Document[]**](Document.md) | Needed for KYC checks. Required to approve the sender unless KYC is waived for your account. Please send us an empty list of documents: &#x60;\&quot;documents\&quot;: [ ]&#x60; in the request if KYC has been waived.  If the documents already exist, please send the Document ID eg. &#x60;&#x60;&#x60;JSON \&quot;documents\&quot;: [   {     \&quot;id\&quot;: \&quot;b6648ba3-1c7b-4f59-8580-684899c84a07\&quot;   } ] &#x60;&#x60;&#x60; | 
**metadata** | [**object**](.md) | Metadata of sender. You can store any detail specific to your integration here (for example the local ID of the sender on your end). When requesting sender details you will receive the sent metadata back. Also when sending sender related webhooks you will receive the details stored here as well. | [optional] 
**errors** | [**map[string,\TransferZero\Model\ValidationErrorDescription[]]**](array.md) | The fields that have some problems and don&#39;t pass validation | [optional] 
**onboarding_status** | **string** | The onboarding status of the sender | [optional] 
**politically_exposed_people** | [**\TransferZero\Model\PoliticallyExposedPerson[]**](PoliticallyExposedPerson.md) | An optional list of politically exposed people, individuals who are or have been entrusted with prominent public functions by a country, for example heads of state or heads of government, senior politicians, senior government, judicial or military officials, senior executives of state owned corporations, important political party officials.  There is a limit of three (3) politically exposed people per Sender.  Politically exposed person example: &#x60;&#x60;&#x60;json   {     \&quot;politically_exposed_person\&quot;: {       \&quot;name\&quot;: \&quot;Ronald Reagan\&quot;,       \&quot;position\&quot;: \&quot;President of the United States\&quot;,       \&quot;started_date\&quot;: \&quot;1981-01-20T00:00:00.000Z\&quot;,       \&quot;ended_date\&quot;: \&quot;1989-01-20T00:00:00.000Z\&quot;,       \&quot;sender_id\&quot;: \&quot;344fb668-196d-43db-9d94-b34b7e6c7e0b\&quot;     }   } &#x60;&#x60;&#x60; | [optional] 
**external_id** | **string** | Optional ID that is supplied by partner linking it to the partner&#39;s own Sender ID. Note: if present we will validate whether the sent ID is a duplicate in our system or not. | [optional] 
**city_of_birth** | **string** | City of birth of sender | [optional] 
**country_of_birth** | **string** | Country of birth of sender in 2-character alpha ISO 3166-2 country format | [optional] 
**gender** | **string** | The gender of the sender:  - &#x60;M&#x60;: Male - &#x60;F&#x60;: Female - &#x60;O&#x60;: Other | [optional] 
**sales_lead_id** | **string** | Sales Lead ID for tracking (optional) | [optional] 
**created_at** | **string** | Date and time of sender was created | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


