<?php
/**
 * PayoutMethodCountryEnum
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
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TransferZero\Model;
use \TransferZero\ObjectSerializer;

/**
 * PayoutMethodCountryEnum Class Doc Comment
 *
 * @category Class
 * @description The country for the pickup or mobile payout.  For USD cash pickup in Nigeria, valid options are: - &#x60;NG&#x60;: Nigeria  For XOF cash pickup, valid options are: - &#x60;CI&#x60;: Ivory Coast - &#x60;ML&#x60;: Mali - &#x60;SN&#x60;: Senegal  For XOF mobile payout, valid options are: - &#x60;CI&#x60;: Ivory Coast - &#x60;SN&#x60;: Senegal - &#x60;BF&#x60;: Burkina Faso - &#x60;ML&#x60;: Mali  For XAF mobile payout, valid options are: - &#x60;CM&#x60;: Cameroon
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutMethodCountryEnum
{
    /**
     * Possible values of this enum
     */
    const AF = 'AF';
    const AL = 'AL';
    const DZ = 'DZ';
    const _AS = 'AS';
    const AD = 'AD';
    const AO = 'AO';
    const AI = 'AI';
    const AQ = 'AQ';
    const AG = 'AG';
    const AR = 'AR';
    const AM = 'AM';
    const AW = 'AW';
    const AU = 'AU';
    const AT = 'AT';
    const AZ = 'AZ';
    const BS = 'BS';
    const BH = 'BH';
    const BD = 'BD';
    const BB = 'BB';
    const BY = 'BY';
    const BE = 'BE';
    const BZ = 'BZ';
    const BJ = 'BJ';
    const BM = 'BM';
    const BT = 'BT';
    const BO = 'BO';
    const BA = 'BA';
    const BW = 'BW';
    const BV = 'BV';
    const BR = 'BR';
    const IO = 'IO';
    const BN = 'BN';
    const BG = 'BG';
    const BF = 'BF';
    const BI = 'BI';
    const KH = 'KH';
    const CM = 'CM';
    const CA = 'CA';
    const CV = 'CV';
    const KY = 'KY';
    const CF = 'CF';
    const TD = 'TD';
    const CL = 'CL';
    const CN = 'CN';
    const CX = 'CX';
    const CC = 'CC';
    const CO = 'CO';
    const KM = 'KM';
    const CG = 'CG';
    const CD = 'CD';
    const CK = 'CK';
    const CR = 'CR';
    const CI = 'CI';
    const HR = 'HR';
    const CU = 'CU';
    const CY = 'CY';
    const CZ = 'CZ';
    const DK = 'DK';
    const DJ = 'DJ';
    const DM = 'DM';
    const _DO = 'DO';
    const TP = 'TP';
    const EC = 'EC';
    const EG = 'EG';
    const SV = 'SV';
    const GQ = 'GQ';
    const ER = 'ER';
    const EE = 'EE';
    const ET = 'ET';
    const FK = 'FK';
    const FO = 'FO';
    const FJ = 'FJ';
    const FI = 'FI';
    const FR = 'FR';
    const GF = 'GF';
    const PF = 'PF';
    const TF = 'TF';
    const GA = 'GA';
    const GM = 'GM';
    const GE = 'GE';
    const DE = 'DE';
    const GH = 'GH';
    const GI = 'GI';
    const GR = 'GR';
    const GL = 'GL';
    const GD = 'GD';
    const GP = 'GP';
    const GU = 'GU';
    const GT = 'GT';
    const GN = 'GN';
    const GW = 'GW';
    const GY = 'GY';
    const HT = 'HT';
    const HM = 'HM';
    const VA = 'VA';
    const HN = 'HN';
    const HK = 'HK';
    const HU = 'HU';
    const IS = 'IS';
    const IN = 'IN';
    const ID = 'ID';
    const IR = 'IR';
    const IQ = 'IQ';
    const IE = 'IE';
    const IL = 'IL';
    const IT = 'IT';
    const JM = 'JM';
    const JP = 'JP';
    const JO = 'JO';
    const KZ = 'KZ';
    const KE = 'KE';
    const KI = 'KI';
    const KP = 'KP';
    const KR = 'KR';
    const KV = 'KV';
    const KW = 'KW';
    const KG = 'KG';
    const LA = 'LA';
    const LV = 'LV';
    const LB = 'LB';
    const LS = 'LS';
    const LR = 'LR';
    const LY = 'LY';
    const LI = 'LI';
    const LT = 'LT';
    const LU = 'LU';
    const MO = 'MO';
    const MK = 'MK';
    const MG = 'MG';
    const MW = 'MW';
    const MY = 'MY';
    const MV = 'MV';
    const ML = 'ML';
    const MT = 'MT';
    const MH = 'MH';
    const MQ = 'MQ';
    const MR = 'MR';
    const MU = 'MU';
    const YT = 'YT';
    const MX = 'MX';
    const FM = 'FM';
    const MD = 'MD';
    const MC = 'MC';
    const MN = 'MN';
    const MS = 'MS';
    const ME = 'ME';
    const MA = 'MA';
    const MZ = 'MZ';
    const MM = 'MM';
    const NA = 'NA';
    const NR = 'NR';
    const NP = 'NP';
    const NL = 'NL';
    const AN = 'AN';
    const NC = 'NC';
    const NZ = 'NZ';
    const NI = 'NI';
    const NE = 'NE';
    const NG = 'NG';
    const NU = 'NU';
    const NF = 'NF';
    const MP = 'MP';
    const NO = 'NO';
    const OM = 'OM';
    const PK = 'PK';
    const PW = 'PW';
    const PS = 'PS';
    const PA = 'PA';
    const PG = 'PG';
    const PY = 'PY';
    const PE = 'PE';
    const PH = 'PH';
    const PN = 'PN';
    const PL = 'PL';
    const PT = 'PT';
    const PR = 'PR';
    const QA = 'QA';
    const RE = 'RE';
    const RO = 'RO';
    const RU = 'RU';
    const RW = 'RW';
    const SH = 'SH';
    const KN = 'KN';
    const LC = 'LC';
    const PM = 'PM';
    const VC = 'VC';
    const WS = 'WS';
    const SM = 'SM';
    const ST = 'ST';
    const SA = 'SA';
    const SN = 'SN';
    const RS = 'RS';
    const SC = 'SC';
    const SL = 'SL';
    const SG = 'SG';
    const SK = 'SK';
    const SI = 'SI';
    const SB = 'SB';
    const SO = 'SO';
    const ZA = 'ZA';
    const GS = 'GS';
    const ES = 'ES';
    const LK = 'LK';
    const SD = 'SD';
    const SR = 'SR';
    const SJ = 'SJ';
    const SZ = 'SZ';
    const SE = 'SE';
    const CH = 'CH';
    const SY = 'SY';
    const TW = 'TW';
    const TJ = 'TJ';
    const TZ = 'TZ';
    const TH = 'TH';
    const TG = 'TG';
    const TK = 'TK';
    const TO = 'TO';
    const TT = 'TT';
    const TN = 'TN';
    const TR = 'TR';
    const TM = 'TM';
    const TC = 'TC';
    const TV = 'TV';
    const UG = 'UG';
    const UA = 'UA';
    const AE = 'AE';
    const GB = 'GB';
    const US = 'US';
    const UM = 'UM';
    const UY = 'UY';
    const UZ = 'UZ';
    const VU = 'VU';
    const VE = 'VE';
    const VN = 'VN';
    const VG = 'VG';
    const VI = 'VI';
    const WF = 'WF';
    const EH = 'EH';
    const YE = 'YE';
    const ZM = 'ZM';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AF,
            self::AL,
            self::DZ,
            self::_AS,
            self::AD,
            self::AO,
            self::AI,
            self::AQ,
            self::AG,
            self::AR,
            self::AM,
            self::AW,
            self::AU,
            self::AT,
            self::AZ,
            self::BS,
            self::BH,
            self::BD,
            self::BB,
            self::BY,
            self::BE,
            self::BZ,
            self::BJ,
            self::BM,
            self::BT,
            self::BO,
            self::BA,
            self::BW,
            self::BV,
            self::BR,
            self::IO,
            self::BN,
            self::BG,
            self::BF,
            self::BI,
            self::KH,
            self::CM,
            self::CA,
            self::CV,
            self::KY,
            self::CF,
            self::TD,
            self::CL,
            self::CN,
            self::CX,
            self::CC,
            self::CO,
            self::KM,
            self::CG,
            self::CD,
            self::CK,
            self::CR,
            self::CI,
            self::HR,
            self::CU,
            self::CY,
            self::CZ,
            self::DK,
            self::DJ,
            self::DM,
            self::_DO,
            self::TP,
            self::EC,
            self::EG,
            self::SV,
            self::GQ,
            self::ER,
            self::EE,
            self::ET,
            self::FK,
            self::FO,
            self::FJ,
            self::FI,
            self::FR,
            self::GF,
            self::PF,
            self::TF,
            self::GA,
            self::GM,
            self::GE,
            self::DE,
            self::GH,
            self::GI,
            self::GR,
            self::GL,
            self::GD,
            self::GP,
            self::GU,
            self::GT,
            self::GN,
            self::GW,
            self::GY,
            self::HT,
            self::HM,
            self::VA,
            self::HN,
            self::HK,
            self::HU,
            self::IS,
            self::IN,
            self::ID,
            self::IR,
            self::IQ,
            self::IE,
            self::IL,
            self::IT,
            self::JM,
            self::JP,
            self::JO,
            self::KZ,
            self::KE,
            self::KI,
            self::KP,
            self::KR,
            self::KV,
            self::KW,
            self::KG,
            self::LA,
            self::LV,
            self::LB,
            self::LS,
            self::LR,
            self::LY,
            self::LI,
            self::LT,
            self::LU,
            self::MO,
            self::MK,
            self::MG,
            self::MW,
            self::MY,
            self::MV,
            self::ML,
            self::MT,
            self::MH,
            self::MQ,
            self::MR,
            self::MU,
            self::YT,
            self::MX,
            self::FM,
            self::MD,
            self::MC,
            self::MN,
            self::MS,
            self::ME,
            self::MA,
            self::MZ,
            self::MM,
            self::NA,
            self::NR,
            self::NP,
            self::NL,
            self::AN,
            self::NC,
            self::NZ,
            self::NI,
            self::NE,
            self::NG,
            self::NU,
            self::NF,
            self::MP,
            self::NO,
            self::OM,
            self::PK,
            self::PW,
            self::PS,
            self::PA,
            self::PG,
            self::PY,
            self::PE,
            self::PH,
            self::PN,
            self::PL,
            self::PT,
            self::PR,
            self::QA,
            self::RE,
            self::RO,
            self::RU,
            self::RW,
            self::SH,
            self::KN,
            self::LC,
            self::PM,
            self::VC,
            self::WS,
            self::SM,
            self::ST,
            self::SA,
            self::SN,
            self::RS,
            self::SC,
            self::SL,
            self::SG,
            self::SK,
            self::SI,
            self::SB,
            self::SO,
            self::ZA,
            self::GS,
            self::ES,
            self::LK,
            self::SD,
            self::SR,
            self::SJ,
            self::SZ,
            self::SE,
            self::CH,
            self::SY,
            self::TW,
            self::TJ,
            self::TZ,
            self::TH,
            self::TG,
            self::TK,
            self::TO,
            self::TT,
            self::TN,
            self::TR,
            self::TM,
            self::TC,
            self::TV,
            self::UG,
            self::UA,
            self::AE,
            self::GB,
            self::US,
            self::UM,
            self::UY,
            self::UZ,
            self::VU,
            self::VE,
            self::VN,
            self::VG,
            self::VI,
            self::WF,
            self::EH,
            self::YE,
            self::ZM,
        ];
    }
}


