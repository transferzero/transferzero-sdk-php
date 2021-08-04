<?php
/**
 * PayoutMethodNatureOfBusinessEnum
 *
 * PHP version 5
 *
 * @category Class
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TransferZero API
 *
 * Reference documentation for the TransferZero API V1
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TransferZero\Model;
use \TransferZero\ObjectSerializer;

/**
 * PayoutMethodNatureOfBusinessEnum Class Doc Comment
 *
 * @category Class
 * @description Nature of business options (used only with a Business sender)  Available values:   - personal: Personal   - agriculture_and_hunting: Agriculture and Hunting   - forestry: Forestry   - fishing: Fishing   - agricultural_by_products: Agricultural By-Products   - coal_mining: Coal Mining   - oil_mining: Oil Mining   - iron_ore_mining: Iron Ore Mining   - other_metal_and_diamond_mining: Other Metal and Diamond Mining   - other_mineral_mining: Other Mineral Mining   - manufacturing_of_food_drink_tobacco: Manufacture of Food/Drink/Tobacco   - manufacturing_of_textiles_leather_fur_furniture: Manufacture of Textiles/Leather/Fur/Furniture   - manufacture_of_wooden_products_furniture: Manufacture of Wooden Products/Furniture   - manufacture_of_paper_pulp_allied_products: Manufacture of Paper/Pulp/Allied Products   - manufacture_of_chemicals_medical_petroleum_rubber_plastic_products: Manufacture Of Chemicals Medical Petroleum Rubber Plastic Products   - manufacture_of_pottery_china_glass_stone: Manufacture Of Pottery China Glass Stone   - manufacture_of_iron_steel_non_ferrous_metals_basic_industries: Manufacture Of Iron Steel Non-Ferrous Metals Basic Industries   - manufacture_of_metal_products_electrical_and_scientific_engineering: Manufacture Of Metal Products Electrical And Scientific Engineering   - manufacture_of_jewelry_musical_instruments_toys: Manufacture Of Jewelry Musical Instruments Toys   - electricity_gas_and_water: Electricity, Gas And Water   - construction: Construction   - wholesale_trade: Wholesale Trade   - retail_trade: Retail Trade   - catering_incl_hotels: Catering Incl. Hotels   - transport_storage: Transport Storage   - communications: Communications   - finance_and_holding_companies: Finance And Holding Companies   - insurance: Insurance   - business_services: Business Services   - real_estate_development_investment: Real Estate Development Investment   - central_state_governments: Central State Governments   - community_services_defence_police_prisons_etc: Community Services Defence Police Prisons Etc   - social_services_education_health_care: Social Services Education Health Care   - personal_services_leisure_services: Personal Services - Leisure Services   - personal_services_domestic_laundry_repairs: Personal Services - Domestic Laundry Repairs   - personal_services_embassies_international_organisations: Personal Services - Embassies
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutMethodNatureOfBusinessEnum
{
    /**
     * Possible values of this enum
     */
    const PERSONAL = 'personal';
    const AGRICULTURE_AND_HUNTING = 'agriculture_and_hunting';
    const FORESTRY = 'forestry';
    const FISHING = 'fishing';
    const AGRICULTURAL_BY_PRODUCTS = 'agricultural_by_products';
    const COAL_MINING = 'coal_mining';
    const OIL_MINING = 'oil_mining';
    const IRON_ORE_MINING = 'iron_ore_mining';
    const OTHER_METAL_AND_DIAMOND_MINING = 'other_metal_and_diamond_mining';
    const OTHER_MINERAL_MINING = 'other_mineral_mining';
    const MANUFACTURING_OF_FOOD_DRINK_TOBACCO = 'manufacturing_of_food_drink_tobacco';
    const MANUFACTURING_OF_TEXTILES_LEATHER_FUR_FURNITURE = 'manufacturing_of_textiles_leather_fur_furniture';
    const MANUFACTURE_OF_WOODEN_PRODUCTS_FURNITURE = 'manufacture_of_wooden_products_furniture';
    const MANUFACTURE_OF_PAPER_PULP_ALLIED_PRODUCTS = 'manufacture_of_paper_pulp_allied_products';
    const MANUFACTURE_OF_CHEMICALS_MEDICAL_PETROLEUM_RUBBER_PLASTIC_PRODUCTS = 'manufacture_of_chemicals_medical_petroleum_rubber_plastic_products';
    const MANUFACTURE_OF_POTTERY_CHINA_GLASS_STONE = 'manufacture_of_pottery_china_glass_stone';
    const MANUFACTURE_OF_IRON_STEEL_NON_FERROUS_METALS_BASIC_INDUSTRIES = 'manufacture_of_iron_steel_non_ferrous_metals_basic_industries';
    const MANUFACTURE_OF_METAL_PRODUCTS_ELECTRICAL_AND_SCIENTIFIC_ENGINEERING = 'manufacture_of_metal_products_electrical_and_scientific_engineering';
    const MANUFACTURE_OF_JEWELRY_MUSICAL_INSTRUMENTS_TOYS = 'manufacture_of_jewelry_musical_instruments_toys';
    const ELECTRICITY_GAS_AND_WATER = 'electricity_gas_and_water';
    const CONSTRUCTION = 'construction';
    const WHOLESALE_TRADE = 'wholesale_trade';
    const RETAIL_TRADE = 'retail_trade';
    const CATERING_INCL_HOTELS = 'catering_incl_hotels';
    const TRANSPORT_STORAGE = 'transport_storage';
    const COMMUNICATIONS = 'communications';
    const FINANCE_AND_HOLDING_COMPANIES = 'finance_and_holding_companies';
    const INSURANCE = 'insurance';
    const BUSINESS_SERVICES = 'business_services';
    const REAL_ESTATE_DEVELOPMENT_INVESTMENT = 'real_estate_development_investment';
    const CENTRAL_STATE_GOVERNMENTS = 'central_state_governments';
    const COMMUNITY_SERVICES_DEFENCE_POLICE_PRISONS_ETC = 'community_services_defence_police_prisons_etc';
    const SOCIAL_SERVICES_EDUCATION_HEALTH_CARE = 'social_services_education_health_care';
    const PERSONAL_SERVICES_LEISURE_SERVICES = 'personal_services_leisure_services';
    const PERSONAL_SERVICES_DOMESTIC_LAUNDRY_REPAIRS = 'personal_services_domestic_laundry_repairs';
    const PERSONAL_SERVICES_EMBASSIES_INTERNATIONAL_ORGANISATIONS = 'personal_services_embassies_international_organisations';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PERSONAL,
            self::AGRICULTURE_AND_HUNTING,
            self::FORESTRY,
            self::FISHING,
            self::AGRICULTURAL_BY_PRODUCTS,
            self::COAL_MINING,
            self::OIL_MINING,
            self::IRON_ORE_MINING,
            self::OTHER_METAL_AND_DIAMOND_MINING,
            self::OTHER_MINERAL_MINING,
            self::MANUFACTURING_OF_FOOD_DRINK_TOBACCO,
            self::MANUFACTURING_OF_TEXTILES_LEATHER_FUR_FURNITURE,
            self::MANUFACTURE_OF_WOODEN_PRODUCTS_FURNITURE,
            self::MANUFACTURE_OF_PAPER_PULP_ALLIED_PRODUCTS,
            self::MANUFACTURE_OF_CHEMICALS_MEDICAL_PETROLEUM_RUBBER_PLASTIC_PRODUCTS,
            self::MANUFACTURE_OF_POTTERY_CHINA_GLASS_STONE,
            self::MANUFACTURE_OF_IRON_STEEL_NON_FERROUS_METALS_BASIC_INDUSTRIES,
            self::MANUFACTURE_OF_METAL_PRODUCTS_ELECTRICAL_AND_SCIENTIFIC_ENGINEERING,
            self::MANUFACTURE_OF_JEWELRY_MUSICAL_INSTRUMENTS_TOYS,
            self::ELECTRICITY_GAS_AND_WATER,
            self::CONSTRUCTION,
            self::WHOLESALE_TRADE,
            self::RETAIL_TRADE,
            self::CATERING_INCL_HOTELS,
            self::TRANSPORT_STORAGE,
            self::COMMUNICATIONS,
            self::FINANCE_AND_HOLDING_COMPANIES,
            self::INSURANCE,
            self::BUSINESS_SERVICES,
            self::REAL_ESTATE_DEVELOPMENT_INVESTMENT,
            self::CENTRAL_STATE_GOVERNMENTS,
            self::COMMUNITY_SERVICES_DEFENCE_POLICE_PRISONS_ETC,
            self::SOCIAL_SERVICES_EDUCATION_HEALTH_CARE,
            self::PERSONAL_SERVICES_LEISURE_SERVICES,
            self::PERSONAL_SERVICES_DOMESTIC_LAUNDRY_REPAIRS,
            self::PERSONAL_SERVICES_EMBASSIES_INTERNATIONAL_ORGANISATIONS,
        ];
    }
}

