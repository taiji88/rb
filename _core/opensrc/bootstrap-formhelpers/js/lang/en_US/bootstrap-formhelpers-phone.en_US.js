/* ==========================================================
 * bootstrap-formhelpers-phone.en_US.js
 * https://github.com/vlamanna/BootstrapFormHelpers
 * ==========================================================
 * Copyright 2012 Vincent Lamanna
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file edcept in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either edpress or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================== */
 
var BFHPhoneFormatList = {
  'AF': '+93 0dd ddd dddd',
  'AL': '+355 0dd ddd ddd',
  'DZ': '+213 0ddd dd dd dd',
  'AS': '+1 (ddd) ddd-dddd',
  'AD': '+376 ddddddddd',
  'AO': '+244 ddd ddd ddd',
  'AI': '+1 (ddd) ddd-dddd',
  'AQ': '+672 ddddddddd',
  'AG': '+1 (ddd) ddd-dddd',
  'AR': '+54 ddddddddd',
  'AM': '+374 0dd dddddd',
  'AW': '+297 ddd dddd',
  'AU': '+61 ddd ddd ddd',
  'AT': '+43 0dddd ddddddddd',
  'AZ': '+994 ddddddddd',
  'BH': '+973 ddddddddd',
  'BD': '+880 ddddddddd',
  'BB': '+1 ddddddddd',
  'BY': '+375 ddddddddd',
  'BE': '+32 ddddddddd',
  'BZ': '+501 ddddddddd',
  'BJ': '+229 ddddddddd',
  'BM': '+1 (ddd) ddd-dddd',
  'BT': '+975 ddddddddd',
  'BO': '+591 ddddddddd',
  'BA': '+387 ddddddddd',
  'BW': '+267 ddddddddd',
  'BV': '+0 ddddddddd',
  'BR': '+55 ddddddddd',
  'IO': '+0 ddddddddd',
  'VG': '+1 (ddd) ddd-dddd',
  'BN': '+673 ddddddddd',
  'BG': '+359 ddddddddd',
  'BF': '+226 ddddddddd',
  'BI': '+257 ddddddddd',
  'CI': '+225 ddddddddd',
  'KH': '+855 ddddddddd',
  'CM': '+237 ddddddddd',
  'CA': '+1 (ddd) ddd-dddd',
  'CV': '+238 ddddddddd',
  'KY': '+1 (ddd) ddd-dddd',
  'CF': '+236 ddddddddd',
  'TD': '+235 ddddddddd',
  'CL': '+56 ddddddddd',
  'CN': '+86 ddddddddd',
  'CX': '+61 ddddddddd',
  'CC': '+61 ddddddddd',
  'CO': '+57 ddddddddd',
  'KM': '+269 ddddddddd',
  'CG': '+242 ddddddddd',
  'CK': '+682 ddddddddd',
  'CR': '+506 ddddddddd',
  'HR': '+385 ddddddddd',
  'CU': '+53 ddddddddd',
  'CY': '+357 ddddddddd',
  'CZ': '+420 ddddddddd',
  'CD': '+243 ddddddddd',
  'DK': '+45 ddddddddd',
  'DJ': '+253 ddddddddd',
  'DM': '+1 (ddd) ddd-dddd',
  'DO': '+1 (ddd) ddd-dddd',
  'TL': '+670 ddddddddd',
  'EC': '+593 ddddddddd',
  'EG': '+20 ddddddddd',
  'SV': '+503 ddddddddd',
  'GQ': '+240 ddddddddd',
  'ER': '+291 ddddddddd',
  'EE': '+372 ddddddddd',
  'ET': '+251 ddddddddd',
  'FO': '+298 ddddddddd',
  'FK': '+500 ddddddddd',
  'FJ': '+679 ddddddddd',
  'FI': '+358 ddddddddd',
  'MK': '+389 ddddddddd',
  'FR': '+33 d dd dd dd dd',
  'GF': '+594 ddddddddd',
  'PF': '+689 ddddddddd',
  'TF': '+262 ddddddddd',
  'GA': '+241 ddddddddd',
  'GE': '+995 ddddddddd',
  'DE': '+49 ddddddddd',
  'GH': '+233 ddddddddd',
  'GI': '+350 ddddddddd',
  'GR': '+30 ddddddddd',
  'GL': '+299 ddddddddd',
  'GD': '+1 (ddd) ddd-dddd',
  'GP': '+590 ddddddddd',
  'GU': '+1 (ddd) ddd-dddd',
  'GT': '+502 ddddddddd',
  'GN': '+224 ddddddddd',
  'GW': '+245 ddddddddd',
  'GY': '+592 ddddddddd',
  'HT': '+509 ddddddddd',
  'HM': '+0 ddddddddd',
  'HN': '+504 ddddddddd',
  'HK': '+852 ddddddddd',
  'HU': '+36 ddddddddd',
  'IS': '+354 ddddddddd',
  'IN': '+91 ddddddddd',
  'ID': '+62 ddddddddd',
  'IR': '+98 ddddddddd',
  'IQ': '+964 ddddddddd',
  'IE': '+353 ddddddddd',
  'IL': '+972 ddddddddd',
  'IT': '+39 ddddddddd',
  'JM': '+1 (ddd) ddd-dddd',
  'JP': '+81 ddddddddd',
  'JO': '+962 ddddddddd',
  'KZ': '+7 ddddddddd',
  'KE': '+254 ddddddddd',
  'KI': '+686 ddddddddd',
  'KW': '+965 ddddddddd',
  'KG': '+996 ddddddddd',
  'LA': '+856 ddddddddd',
  'LV': '+371 ddddddddd',
  'LB': '+961 ddddddddd',
  'LS': '+266 ddddddddd',
  'LR': '+231 ddddddddd',
  'LY': '+218 ddddddddd',
  'LI': '+423 ddddddddd',
  'LT': '+370 ddddddddd',
  'LU': '+352 ddddddddd',
  'MO': '+853 ddddddddd',
  'MG': '+261 ddddddddd',
  'MW': '+265 ddddddddd',
  'MY': '+60 ddddddddd',
  'MV': '+960 ddddddddd',
  'ML': '+223 ddddddddd',
  'MT': '+356 ddddddddd',
  'MH': '+692 ddddddddd',
  'MQ': '+596 ddddddddd',
  'MR': '+222 ddddddddd',
  'MU': '+230 ddddddddd',
  'YT': '+262 ddddddddd',
  'MX': '+52 ddddddddd',
  'FM': '+691 ddddddddd',
  'MD': '+373 ddddddddd',
  'MC': '+377 ddddddddd',
  'MN': '+976 ddddddddd',
  'MS': '+1 (ddd) ddd-dddd',
  'MA': '+212 ddddddddd',
  'MZ': '+258 ddddddddd',
  'MM': '+95 ddddddddd',
  'NA': '+264 ddddddddd',
  'NR': '+674 ddddddddd',
  'NP': '+977 ddddddddd',
  'NL': '+31 ddddddddd',
  'AN': '+599 ddddddddd',
  'NC': '+687 ddddddddd',
  'NZ': '+64 ddddddddd',
  'NI': '+505 ddddddddd',
  'NE': '+227 ddddddddd',
  'NG': '+234 ddddddddd',
  'NU': '+683 ddddddddd',
  'NF': '+672 ddddddddd',
  'KP': '+850 ddddddddd',
  'MP': '+1 (ddd) ddd-dddd',
  'NO': '+47 ddddddddd',
  'OM': '+968 ddddddddd',
  'PK': '+92 ddddddddd',
  'PW': '+680 ddddddddd',
  'PA': '+507 ddddddddd',
  'PG': '+675 ddddddddd',
  'PY': '+595 ddddddddd',
  'PE': '+51 ddddddddd',
  'PH': '+63 ddddddddd',
  'PN': '+870 ddddddddd',
  'PL': '+48 ddddddddd',
  'PT': '+351 ddddddddd',
  'PR': '+1 (ddd) ddd-dddd',
  'QA': '+974 ddddddddd',
  'RE': '+262 ddddddddd',
  'RO': '+40 ddddddddd',
  'RU': '+7 ddddddddd',
  'RW': '+250 ddddddddd',
  'ST': '+239 ddddddddd',
  'SH': '+290 ddddddddd',
  'KN': '+1 (ddd) ddd-dddd',
  'LC': '+1 (ddd) ddd-dddd',
  'PM': '+508 ddddddddd',
  'VC': '+1 (ddd) ddd-dddd',
  'WS': '+685 ddddddddd',
  'SM': '+378 ddddddddd',
  'SA': '+966 ddddddddd',
  'SN': '+221 ddddddddd',
  'SC': '+248 ddddddddd',
  'SL': '+232 ddddddddd',
  'SG': '+65 ddddddddd',
  'SK': '+421 ddddddddd',
  'SI': '+386 ddddddddd',
  'SB': '+677 ddddddddd',
  'SO': '+252 ddddddddd',
  'ZA': '+27 ddddddddd',
  'GS': '+0 ddddddddd',
  'KR': '+82 ddddddddd',
  'ES': '+34 ddddddddd',
  'LK': '+94 ddddddddd',
  'SD': '+249 ddddddddd',
  'SR': '+597 ddddddddd',
  'SJ': '+0 ddddddddd',
  'SZ': '+268 ddddddddd',
  'SE': '+46 ddddddddd',
  'CH': '+41 ddddddddd',
  'SY': '+963 ddddddddd',
  'TW': '+886 ddddddddd',
  'TJ': '+992 ddddddddd',
  'TZ': '+255 ddddddddd',
  'TH': '+66 ddddddddd',
  'BS': '+1 (ddd) ddd-dddd',
  'GM': '+220 ddddddddd',
  'TG': '+228 ddddddddd',
  'TK': '+690 ddddddddd',
  'TO': '+676 ddddddddd',
  'TT': '+1 (ddd) ddd-dddd',
  'TN': '+216 ddddddddd',
  'TR': '+90 ddddddddd',
  'TM': '+993 ddddddddd',
  'TC': '+1 (ddd) ddd-dddd',
  'TV': '+688 ddddddddd',
  'VI': '+1 (ddd) ddd-dddd',
  'UG': '+256 ddddddddd',
  'UA': '+380 ddddddddd',
  'AE': '+971 ddddddddd',
  'GB': '+44 (ddd) dddd dddd',
  'US': '+1 (ddd) ddd-dddd',
  'UM': '+0 ddddddddd',
  'UY': '+598 ddddddddd',
  'UZ': '+998 ddddddddd',
  'VU': '+678 ddddddddd',
  'VA': '+39 ddddddddd',
  'VE': '+58 ddddddddd',
  'VN': '+84 ddddddddd',
  'WF': '+681 ddddddddd',
  'EH': '+0 ddddddddd',
  'YE': '+967 ddddddddd',
  'YU': '+0 ddddddddd',
  'ZM': '+260 ddddddddd',
  'ZW': '+263 ddddddddd'
};
