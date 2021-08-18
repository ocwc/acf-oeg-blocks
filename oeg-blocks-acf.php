<?php
/*
Plugin Name: OEGlobal Custom Blocks
Description: Adds custom gutenberg blocks with the help of ACF PRO.
Version: 1.0.1
Author: Mario Badilla

OEGlobal Custom Blocks is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

OEGlobal Custom Blocks is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with OEGlobal Custom Blocks. If not, see <https://www.gnu.org/licenses/>.
*/

if (!defined('ABSPATH')) {
  exit; // Prevent access directly
}

function oeg_register_acf_block_types()
{
  // Register featured content block (happening now)
  acf_register_block_type([
    'name'            => 'featured',
    'title'           => __('OEG Featured content'),
    'description'     => __('My Featured content block.'),
    'render_template' => dirname(__file__) . '/blocks/featured/featured.php',
    'category'        => 'design',
    'icon'            => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="24" height="24" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M2.22166 17.7903C4.3186 21.2793 8.1652 23.3121 12.2083 22.9608C17.7451 22.4817 22.0015 17.7165 22.0001 11.9986V11.4425C21.9994 11.4168 21.9811 11.3952 21.9565 11.391L21.9398 11.3884C21.9212 11.3724 21.8988 11.3607 21.8737 11.3551L21.1155 11.2385L20.1175 11.0524H20.1045C19.8866 11.0143 19.6687 10.9784 19.4508 10.9448L18.88 10.8618C17.9474 10.7205 17.0214 10.6039 16.1237 10.5187H16.0932L15.6814 10.4829L15.5028 10.4672C14.0756 10.3483 12.6332 10.2855 11.2126 10.2855C10.2125 10.2855 9.20589 10.3169 8.21452 10.3752C7.80804 10.4003 7.40197 10.4303 6.9964 10.4651C7.07101 9.60466 7.20872 8.77599 7.4048 7.99873C7.70719 7.97487 8.00986 7.95385 8.31276 7.93569C9.27145 7.87739 10.2476 7.84824 11.215 7.84824C11.6507 7.84824 12.7707 7.87066 13.3633 7.88411C13.4616 7.88582 13.5449 7.80987 13.5551 7.70922L13.7381 6.0455C13.7405 6.02632 13.7351 6.00696 13.7231 5.99207C13.7111 5.97718 13.6937 5.9681 13.6749 5.96702C12.8556 5.92666 12.0299 5.90648 11.215 5.90648C10.2127 5.90648 9.19737 5.93787 8.20164 5.99617L8.08869 6.00315C8.18141 5.79667 8.27932 5.59684 8.38227 5.40426C9.14167 3.98411 10.0761 3.14515 11.041 3.00566C11.0761 3.00457 11.1111 3.00369 11.1462 3.00303C14.1325 2.94673 16.9406 4.46148 18.5945 7.02088C18.6107 7.04775 18.6367 7.06674 18.6667 7.07351C18.6967 7.08027 18.728 7.07422 18.7536 7.05676L20.2003 6.09485C20.2524 6.05954 20.2678 5.98808 20.2352 5.93341C19.2854 4.4604 18.0063 3.24323 16.505 2.38398C12.3325 -0.000601929 7.12942 0.749669 3.75443 4.2226C3.00707 4.99124 2.38831 5.85375 1.9037 6.77797C1.26691 6.89802 0.632239 7.03034 3.05176e-05 7.17488V9.1651C0.34847 9.08218 0.697712 9.00314 1.0477 8.928C0.818011 9.74069 0.679969 10.5785 0.636559 11.424C0.424102 11.47 0.211912 11.5174 0 11.5662V13.5654C0.235776 13.5093 0.471915 13.4551 0.7084 13.4026C0.816937 14.2732 1.02791 15.1378 1.34457 15.9775C0.895239 16.0686 0.447044 16.1659 0.000102043 16.2693V18.2708C0.737176 18.0933 1.47789 17.9331 2.22166 17.7903ZM4.34685 17.4311C4.58545 17.7547 4.84685 18.0638 5.13033 18.3557C5.65181 18.8927 6.22986 19.3528 6.84857 19.7315C6.8088 19.661 6.76951 19.5894 6.73071 19.5168C6.35913 18.8285 6.0456 18.0632 5.79375 17.2415C5.31052 17.2974 4.82817 17.3606 4.34685 17.4311ZM3.3105 15.6193C3.98419 15.5103 4.66002 15.4151 5.33757 15.3336C5.18412 14.4687 5.0909 13.5651 5.06119 12.6413C4.24589 12.746 3.43324 12.8714 2.62398 13.0173C2.7249 13.9153 2.9565 14.7927 3.3105 15.6193ZM2.61439 11.0365C3.43823 10.8921 4.26545 10.7683 5.0953 10.6651C5.15255 9.81542 5.26451 8.98743 5.42796 8.19562C4.69454 8.2839 3.96321 8.38897 3.2345 8.51074C3.05507 8.95136 2.91252 9.40782 2.80881 9.87522C2.71882 10.2605 2.65422 10.6484 2.61439 11.0365ZM4.48933 6.35955C4.98647 6.29227 5.48462 6.23239 5.98361 6.17995C6.19817 5.5713 6.44787 4.9981 6.73071 4.46926C6.76877 4.39807 6.8073 4.32792 6.84629 4.2588C5.95225 4.80371 5.15185 5.51263 4.48933 6.35955ZM15.8164 19.7135C15.8324 19.7033 15.8485 19.693 15.8644 19.6827C16.8207 19.08 17.6397 18.3049 18.2929 17.4098C17.817 17.342 17.3403 17.2813 16.863 17.2276C16.6108 18.0509 16.2976 18.8183 15.9276 19.51C15.891 19.5788 15.8539 19.6467 15.8164 19.7135ZM19.3168 15.6025C19.6645 14.7828 19.8949 13.9072 19.9934 13.0023C19.9118 12.9876 19.829 12.9729 19.745 12.9583L19.1131 12.8843C18.8168 12.8349 18.5052 12.7879 18.1261 12.734C17.9368 12.7068 17.7608 12.6825 17.5961 12.6608C17.5652 13.5755 17.4714 14.4697 17.3186 15.326C17.9862 15.4049 18.6524 15.4971 19.3168 15.6025ZM15.7169 12.4539C15.6932 13.3842 15.5986 14.2867 15.4377 15.1389C14.0811 15.0294 12.7203 14.9743 11.3585 14.974C10.3061 14.974 9.24282 15.0054 8.19479 15.0727C7.86915 15.093 7.54378 15.1166 7.21872 15.1433C7.0557 14.2833 6.95999 13.3734 6.93673 12.4373C8.36787 12.3097 9.80537 12.2455 11.2453 12.2452C12.7382 12.247 14.2302 12.3166 15.7169 12.4539ZM8.37791 18.575C8.1288 18.109 7.90954 17.6003 7.72196 17.0573C7.91723 17.0426 8.11261 17.029 8.30809 17.0167C9.31908 16.9539 10.3453 16.9202 11.3585 16.9202C12.5524 16.9197 13.7456 16.9627 14.9356 17.0492C14.7464 17.5958 14.5245 18.1072 14.2717 18.575C13.4372 20.1356 12.3892 20.9966 11.3237 20.9966C10.2583 20.9966 9.21241 20.1446 8.37791 18.575Z" fill="#0D59F2"/></svg>',
    'enqueue_style'   => plugin_dir_url(__FILE__) . '/blocks/featured/featured.css',
    'mode'            => 'edit',
  ]);
  // Register Media text and link Block
  acf_register_block_type([
    'name'            => 'oeg-hero-banner',
    'title'           => __('OEG Hero Banner'),
    'description'     => __('A block with media, text & a button'),
    'render_template' => dirname(__file__) . '/blocks/oeg-hero/oeg-hero.php',
    'category'        => 'design',
    'icon'            => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="24" height="24" fill="white"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.22166 17.7903C4.3186 21.2793 8.1652 23.3121 12.2083 22.9608C17.7451 22.4817 22.0015 17.7165 22.0001 11.9986V11.4425C21.9994 11.4168 21.9811 11.3952 21.9565 11.391L21.9398 11.3884C21.9212 11.3724 21.8988 11.3607 21.8737 11.3551L21.1155 11.2385L20.1175 11.0524H20.1045C19.8866 11.0143 19.6687 10.9784 19.4508 10.9448L18.88 10.8618C17.9474 10.7205 17.0214 10.6039 16.1237 10.5187H16.0932L15.6814 10.4829L15.5028 10.4672C14.0756 10.3483 12.6332 10.2855 11.2126 10.2855C10.2125 10.2855 9.20589 10.3169 8.21452 10.3752C7.80804 10.4003 7.40197 10.4303 6.9964 10.4651C7.07101 9.60466 7.20872 8.77599 7.4048 7.99873C7.70719 7.97487 8.00986 7.95385 8.31276 7.93569C9.27145 7.87739 10.2476 7.84824 11.215 7.84824C11.6507 7.84824 12.7707 7.87066 13.3633 7.88411C13.4616 7.88582 13.5449 7.80987 13.5551 7.70922L13.7381 6.0455C13.7405 6.02632 13.7351 6.00696 13.7231 5.99207C13.7111 5.97718 13.6937 5.9681 13.6749 5.96702C12.8556 5.92666 12.0299 5.90648 11.215 5.90648C10.2127 5.90648 9.19737 5.93787 8.20164 5.99617L8.08869 6.00315C8.18141 5.79667 8.27932 5.59684 8.38227 5.40426C9.14167 3.98411 10.0761 3.14515 11.041 3.00566C11.0761 3.00457 11.1111 3.00369 11.1462 3.00303C14.1325 2.94673 16.9406 4.46148 18.5945 7.02088C18.6107 7.04775 18.6367 7.06674 18.6667 7.07351C18.6967 7.08027 18.728 7.07422 18.7536 7.05676L20.2003 6.09485C20.2524 6.05954 20.2678 5.98808 20.2352 5.93341C19.2854 4.4604 18.0063 3.24323 16.505 2.38398C12.3325 -0.000601929 7.12942 0.749669 3.75443 4.2226C3.00707 4.99124 2.38831 5.85375 1.9037 6.77797C1.26691 6.89802 0.632239 7.03034 3.05176e-05 7.17488V9.1651C0.34847 9.08218 0.697712 9.00314 1.0477 8.928C0.818011 9.74069 0.679969 10.5785 0.636559 11.424C0.424102 11.47 0.211912 11.5174 0 11.5662V13.5654C0.235776 13.5093 0.471915 13.4551 0.7084 13.4026C0.816937 14.2732 1.02791 15.1378 1.34457 15.9775C0.895239 16.0686 0.447044 16.1659 0.000102043 16.2693V18.2708C0.737176 18.0933 1.47789 17.9331 2.22166 17.7903ZM4.34685 17.4311C4.58545 17.7547 4.84685 18.0638 5.13033 18.3557C5.65181 18.8927 6.22986 19.3528 6.84857 19.7315C6.8088 19.661 6.76951 19.5894 6.73071 19.5168C6.35913 18.8285 6.0456 18.0632 5.79375 17.2415C5.31052 17.2974 4.82817 17.3606 4.34685 17.4311ZM3.3105 15.6193C3.98419 15.5103 4.66002 15.4151 5.33757 15.3336C5.18412 14.4687 5.0909 13.5651 5.06119 12.6413C4.24589 12.746 3.43324 12.8714 2.62398 13.0173C2.7249 13.9153 2.9565 14.7927 3.3105 15.6193ZM2.61439 11.0365C3.43823 10.8921 4.26545 10.7683 5.0953 10.6651C5.15255 9.81542 5.26451 8.98743 5.42796 8.19562C4.69454 8.2839 3.96321 8.38897 3.2345 8.51074C3.05507 8.95136 2.91252 9.40782 2.80881 9.87522C2.71882 10.2605 2.65422 10.6484 2.61439 11.0365ZM4.48933 6.35955C4.98647 6.29227 5.48462 6.23239 5.98361 6.17995C6.19817 5.5713 6.44787 4.9981 6.73071 4.46926C6.76877 4.39807 6.8073 4.32792 6.84629 4.2588C5.95225 4.80371 5.15185 5.51263 4.48933 6.35955ZM15.8164 19.7135C15.8324 19.7033 15.8485 19.693 15.8644 19.6827C16.8207 19.08 17.6397 18.3049 18.2929 17.4098C17.817 17.342 17.3403 17.2813 16.863 17.2276C16.6108 18.0509 16.2976 18.8183 15.9276 19.51C15.891 19.5788 15.8539 19.6467 15.8164 19.7135ZM19.3168 15.6025C19.6645 14.7828 19.8949 13.9072 19.9934 13.0023C19.9118 12.9876 19.829 12.9729 19.745 12.9583L19.1131 12.8843C18.8168 12.8349 18.5052 12.7879 18.1261 12.734C17.9368 12.7068 17.7608 12.6825 17.5961 12.6608C17.5652 13.5755 17.4714 14.4697 17.3186 15.326C17.9862 15.4049 18.6524 15.4971 19.3168 15.6025ZM15.7169 12.4539C15.6932 13.3842 15.5986 14.2867 15.4377 15.1389C14.0811 15.0294 12.7203 14.9743 11.3585 14.974C10.3061 14.974 9.24282 15.0054 8.19479 15.0727C7.86915 15.093 7.54378 15.1166 7.21872 15.1433C7.0557 14.2833 6.95999 13.3734 6.93673 12.4373C8.36787 12.3097 9.80537 12.2455 11.2453 12.2452C12.7382 12.247 14.2302 12.3166 15.7169 12.4539ZM8.37791 18.575C8.1288 18.109 7.90954 17.6003 7.72196 17.0573C7.91723 17.0426 8.11261 17.029 8.30809 17.0167C9.31908 16.9539 10.3453 16.9202 11.3585 16.9202C12.5524 16.9197 13.7456 16.9627 14.9356 17.0492C14.7464 17.5958 14.5245 18.1072 14.2717 18.575C13.4372 20.1356 12.3892 20.9966 11.3237 20.9966C10.2583 20.9966 9.21241 20.1446 8.37791 18.575Z" fill="#0D59F2"/></svg>',
    'enqueue_style'   => plugin_dir_url(__FILE__) . '/blocks/oeg-hero/oeg-hero.css',
    'mode'            => 'edit',
  ]);
  // Register People Gallery Block
  acf_register_block_type([
    'name'            => 'oeg-people-grid',
    'title'           => __('OEG Grid of People'),
    'description'     => __('A repeater block of people cards.'),
    'render_template' => dirname(__file__) . '/blocks/oeg-people/oeg-people.php',
    'category'        => 'design',
    'icon'            => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="24" height="24" fill="white"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.22166 17.7903C4.3186 21.2793 8.1652 23.3121 12.2083 22.9608C17.7451 22.4817 22.0015 17.7165 22.0001 11.9986V11.4425C21.9994 11.4168 21.9811 11.3952 21.9565 11.391L21.9398 11.3884C21.9212 11.3724 21.8988 11.3607 21.8737 11.3551L21.1155 11.2385L20.1175 11.0524H20.1045C19.8866 11.0143 19.6687 10.9784 19.4508 10.9448L18.88 10.8618C17.9474 10.7205 17.0214 10.6039 16.1237 10.5187H16.0932L15.6814 10.4829L15.5028 10.4672C14.0756 10.3483 12.6332 10.2855 11.2126 10.2855C10.2125 10.2855 9.20589 10.3169 8.21452 10.3752C7.80804 10.4003 7.40197 10.4303 6.9964 10.4651C7.07101 9.60466 7.20872 8.77599 7.4048 7.99873C7.70719 7.97487 8.00986 7.95385 8.31276 7.93569C9.27145 7.87739 10.2476 7.84824 11.215 7.84824C11.6507 7.84824 12.7707 7.87066 13.3633 7.88411C13.4616 7.88582 13.5449 7.80987 13.5551 7.70922L13.7381 6.0455C13.7405 6.02632 13.7351 6.00696 13.7231 5.99207C13.7111 5.97718 13.6937 5.9681 13.6749 5.96702C12.8556 5.92666 12.0299 5.90648 11.215 5.90648C10.2127 5.90648 9.19737 5.93787 8.20164 5.99617L8.08869 6.00315C8.18141 5.79667 8.27932 5.59684 8.38227 5.40426C9.14167 3.98411 10.0761 3.14515 11.041 3.00566C11.0761 3.00457 11.1111 3.00369 11.1462 3.00303C14.1325 2.94673 16.9406 4.46148 18.5945 7.02088C18.6107 7.04775 18.6367 7.06674 18.6667 7.07351C18.6967 7.08027 18.728 7.07422 18.7536 7.05676L20.2003 6.09485C20.2524 6.05954 20.2678 5.98808 20.2352 5.93341C19.2854 4.4604 18.0063 3.24323 16.505 2.38398C12.3325 -0.000601929 7.12942 0.749669 3.75443 4.2226C3.00707 4.99124 2.38831 5.85375 1.9037 6.77797C1.26691 6.89802 0.632239 7.03034 3.05176e-05 7.17488V9.1651C0.34847 9.08218 0.697712 9.00314 1.0477 8.928C0.818011 9.74069 0.679969 10.5785 0.636559 11.424C0.424102 11.47 0.211912 11.5174 0 11.5662V13.5654C0.235776 13.5093 0.471915 13.4551 0.7084 13.4026C0.816937 14.2732 1.02791 15.1378 1.34457 15.9775C0.895239 16.0686 0.447044 16.1659 0.000102043 16.2693V18.2708C0.737176 18.0933 1.47789 17.9331 2.22166 17.7903ZM4.34685 17.4311C4.58545 17.7547 4.84685 18.0638 5.13033 18.3557C5.65181 18.8927 6.22986 19.3528 6.84857 19.7315C6.8088 19.661 6.76951 19.5894 6.73071 19.5168C6.35913 18.8285 6.0456 18.0632 5.79375 17.2415C5.31052 17.2974 4.82817 17.3606 4.34685 17.4311ZM3.3105 15.6193C3.98419 15.5103 4.66002 15.4151 5.33757 15.3336C5.18412 14.4687 5.0909 13.5651 5.06119 12.6413C4.24589 12.746 3.43324 12.8714 2.62398 13.0173C2.7249 13.9153 2.9565 14.7927 3.3105 15.6193ZM2.61439 11.0365C3.43823 10.8921 4.26545 10.7683 5.0953 10.6651C5.15255 9.81542 5.26451 8.98743 5.42796 8.19562C4.69454 8.2839 3.96321 8.38897 3.2345 8.51074C3.05507 8.95136 2.91252 9.40782 2.80881 9.87522C2.71882 10.2605 2.65422 10.6484 2.61439 11.0365ZM4.48933 6.35955C4.98647 6.29227 5.48462 6.23239 5.98361 6.17995C6.19817 5.5713 6.44787 4.9981 6.73071 4.46926C6.76877 4.39807 6.8073 4.32792 6.84629 4.2588C5.95225 4.80371 5.15185 5.51263 4.48933 6.35955ZM15.8164 19.7135C15.8324 19.7033 15.8485 19.693 15.8644 19.6827C16.8207 19.08 17.6397 18.3049 18.2929 17.4098C17.817 17.342 17.3403 17.2813 16.863 17.2276C16.6108 18.0509 16.2976 18.8183 15.9276 19.51C15.891 19.5788 15.8539 19.6467 15.8164 19.7135ZM19.3168 15.6025C19.6645 14.7828 19.8949 13.9072 19.9934 13.0023C19.9118 12.9876 19.829 12.9729 19.745 12.9583L19.1131 12.8843C18.8168 12.8349 18.5052 12.7879 18.1261 12.734C17.9368 12.7068 17.7608 12.6825 17.5961 12.6608C17.5652 13.5755 17.4714 14.4697 17.3186 15.326C17.9862 15.4049 18.6524 15.4971 19.3168 15.6025ZM15.7169 12.4539C15.6932 13.3842 15.5986 14.2867 15.4377 15.1389C14.0811 15.0294 12.7203 14.9743 11.3585 14.974C10.3061 14.974 9.24282 15.0054 8.19479 15.0727C7.86915 15.093 7.54378 15.1166 7.21872 15.1433C7.0557 14.2833 6.95999 13.3734 6.93673 12.4373C8.36787 12.3097 9.80537 12.2455 11.2453 12.2452C12.7382 12.247 14.2302 12.3166 15.7169 12.4539ZM8.37791 18.575C8.1288 18.109 7.90954 17.6003 7.72196 17.0573C7.91723 17.0426 8.11261 17.029 8.30809 17.0167C9.31908 16.9539 10.3453 16.9202 11.3585 16.9202C12.5524 16.9197 13.7456 16.9627 14.9356 17.0492C14.7464 17.5958 14.5245 18.1072 14.2717 18.575C13.4372 20.1356 12.3892 20.9966 11.3237 20.9966C10.2583 20.9966 9.21241 20.1446 8.37791 18.575Z" fill="#0D59F2"/></svg>',
    'enqueue_style'   => plugin_dir_url(__FILE__) . '/blocks/oeg-people/oeg-people.css',
    'mode'            => 'edit',
  ]);
}

// Check function exists.
if (function_exists('acf_register_block_type')) {
  add_action('acf/init', 'oeg_register_acf_block_types');
}

include_once(plugin_dir_path(__FILE__) . 'includes/fields.php');
