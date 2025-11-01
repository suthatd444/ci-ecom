<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'backend/Users/login';
$route['register'] = 'backend/Users/register';
$route['dashboard'] = 'backend/Users/dashboard';
$route['logout'] = 'backend/Users/logout';
$route['my-profile'] = 'backend/Users/my_profile';
$route['edit-profile'] = 'backend/Users/edit_profile';
$route['edit-password'] = 'backend/Users/edit_password';
$route['change-password'] = 'backend/Users/change_password';
/*blog*/
$route['blog'] = 'backend/Blog/index';
$route['add-blog'] = 'backend/Blog/add';
$route['edit-blog'] = 'backend/Blog/edit';
$route['delete-blog'] = 'backend/Blog/delete';
/*csrstep*/
$route['csrstep'] = 'backend/CsrStep/index';
$route['add-csrstep'] = 'backend/csrStep/add';
$route['edit-csrstep'] = 'backend/csrStep/edit';
$route['delete-csrstep'] = 'backend/csrStep/delete';
/*quality-certifications*/
$route['quality-certifications'] = 'backend/QualityCertification/index';
$route['add-quality-certifications'] = 'backend/QualityCertification/add';
$route['edit-quality-certifications'] = 'backend/QualityCertification/edit';
$route['delete-quality-certifications'] = 'backend/QualityCertification/delete';
/*event*/
$route['event'] = 'backend/Event/index';
$route['add-event'] = 'backend/Event/add';
$route['edit-event'] = 'backend/Event/edit';
$route['delete-event'] = 'backend/Event/delete';
/*post*/
$route['post'] = 'backend/Post/index';
$route['add-post'] = 'backend/Post/add';
$route['edit-post'] = 'backend/Post/edit';
$route['delete-post'] = 'backend/Post/delete';
/*product*/
$route['product'] = 'backend/Product/index';
$route['add-product'] = 'backend/Product/add';
$route['edit-product'] = 'backend/Product/edit';
$route['delete-product'] = 'backend/Product/delete';
/*product*/
$route['subsidiaries'] = 'backend/Subsidiaries/index';
/*csractivity*/
$route['csractivity'] = 'backend/Csractivity/index';
$route['add-csractivity'] = 'backend/Csractivity/add';
$route['edit-csractivity'] = 'backend/Csractivity/edit';
$route['delete-csractivity'] = 'backend/Csractivity/delete';
/*csractivity*/
$route['careers'] = 'backend/Career/index';
$route['careers-list'] = 'backend/Career/career_list';
$route['add-careers'] = 'backend/Career/add';
$route['edit-careers'] = 'backend/Career/edit';
$route['delete-careers'] = 'backend/Career/delete';
/* home */
$route['home'] = 'backend/Home/index';
$route['highlights'] = 'backend/Home/highlight';
$route['global-seo'] = 'backend/Home/global_seo';
$route['header-footer'] = 'backend/Home/header_footer';
$route['career-form-list'] = 'backend/Home/career_form_list';
$route['inquiry-form-list'] = 'backend/Home/inquiry_form_list';
/*investors-relations*/
$route['investorsrelations'] = 'backend/InvestorsRelations/index';
$route['annualreports'] = 'backend/InvestorsRelations/annualreports';
$route['add-annual-reports'] = 'backend/InvestorsRelations/add';
$route['edit-annual-reports'] = 'backend/InvestorsRelations/edit';
$route['delete-annual-reports'] = 'backend/InvestorsRelations/delete';
/*investors-relations*/
$route['qualityassurance'] = 'backend/QualityAssurance/index';
$route['inspectiontesting'] = 'backend/QualityAssurance/inspectiontesting';
$route['add-inspection-testing'] = 'backend/QualityAssurance/add';
$route['edit-inspection-testing'] = 'backend/QualityAssurance/edit';
$route['delete-inspection-testing'] = 'backend/QualityAssurance/delete';
/* explore-interests */
$route['explore-interests'] = 'backend/ExploreInterests/index';
$route['add-explore-interests'] = 'backend/ExploreInterests/add';
$route['edit-explore-interests'] = 'backend/ExploreInterests/edit';
$route['delete-explore-interests'] = 'backend/ExploreInterests/delete';
/* industry-presence */
$route['industry-presence'] = 'backend/IndustryPresence/index';
$route['add-industry-presence'] = 'backend/IndustryPresence/add';
$route['edit-industry-presence'] = 'backend/IndustryPresence/edit';
$route['delete-industry-presence'] = 'backend/IndustryPresence/delete';
/* proudly-affirm */
$route['proudly-affirm'] = 'backend/ProudlyAffirm/index';
$route['add-proudly-affirm'] = 'backend/ProudlyAffirm/add';
$route['edit-proudly-affirm'] = 'backend/ProudlyAffirm/edit';
$route['delete-proudly-affirm'] = 'backend/ProudlyAffirm/delete';
/* intellegent-investors */
$route['intellegent-investors'] = 'backend/IntellegentInvestors/index';
$route['add-intellegent-investors'] = 'backend/IntellegentInvestors/add';
$route['edit-intellegent-investors'] = 'backend/IntellegentInvestors/edit';
$route['delete-intellegent-investors'] = 'backend/IntellegentInvestors/delete';

$route['investorsrelations-tab'] = 'backend/InvestorsRelations/index_tab';
$route['add-investorsrelations-tab'] = 'backend/InvestorsRelations/add_tab';
$route['edit-investorsrelations-tab'] = 'backend/InvestorsRelations/edit_tab';
$route['delete-investorsrelations-tab'] = 'backend/InvestorsRelations/delete_tab';

$route['investorsrelations-tabdata'] = 'backend/InvestorsRelations/index_tabdata';
$route['add-investorsrelations-tabdata'] = 'backend/InvestorsRelations/add_tabdata';
$route['edit-investorsrelations-tabdata'] = 'backend/InvestorsRelations/edit_tabdata';
$route['delete-investorsrelations-tabdata'] = 'backend/InvestorsRelations/delete_tabdata';


$route['investorsrelations-tabcontent'] = 'backend/InvestorsRelations/index_tabcontent';
$route['add-investorsrelations-tabcontent'] = 'backend/InvestorsRelations/add_tabcontent';
$route['edit-investorsrelations-tabcontent'] = 'backend/InvestorsRelations/edit_tabcontent';
$route['delete-investorsrelations-tabcontent'] = 'backend/InvestorsRelations/delete_tabcontent';
$route['delete-content'] = 'backend/InvestorsRelations/delete_content';


$route['investorsrelations-tabdoc'] = 'backend/InvestorsRelations/index_tabdoc';
$route['add-investorsrelations-tabdoc'] = 'backend/InvestorsRelations/add_tabdoc';
$route['edit-investorsrelations-tabdoc'] = 'backend/InvestorsRelations/edit_tabdoc';
$route['delete-investorsrelations-tabdoc'] = 'backend/InvestorsRelations/delete_tabdoc';

$route['delete-document'] = 'backend/InvestorsRelations/delete_document';
/* locate-us */
$route['locateus'] = 'backend/LocateUs/index';
$route['add-locate-us'] = 'backend/LocateUs/add';
$route['edit-locate-us'] = 'backend/LocateUs/edit';
$route['delete-locate-us'] = 'backend/LocateUs/delete';
/* about */
$route['company-profile'] = 'backend/About/companyprofile';
$route['milestones'] = 'backend/About/milestones';
$route['add-milestones'] = 'backend/About/add_milestones';
$route['edit-milestones'] = 'backend/About/edit_milestones';
$route['delete-milestones'] = 'backend/About/delete_milestones';
$route['integrity'] = 'backend/About/integrity';
$route['add-integrity'] = 'backend/About/add_integrity';
$route['edit-integrity'] = 'backend/About/edit_integrity';
$route['delete-integrity'] = 'backend/About/delete_integrity';
$route['board'] = 'backend/About/board';
$route['add-board'] = 'backend/About/add_board';
$route['edit-board'] = 'backend/About/edit_board';
$route['delete-board'] = 'backend/About/delete_board';
$route['edit-about-on-the-board'] = 'backend/About/edit_about_onthe_board';
$route['our-leadership'] = 'backend/About/ourleadership';
$route['add-our-leadership'] = 'backend/About/add_ourleadership';
$route['edit-our-leadership'] = 'backend/About/edit_ourleadership';
$route['delete-our-leadership'] = 'backend/About/delete_ourleadership';
$route['edit-about-on-the-ourleadership'] = 'backend/About/edit_about_ourleadership';
/* manufacture range */
$route['manufacture-range'] = 'backend/ManufactureRange/index';
$route['add-manufacture-range'] = 'backend/ManufactureRange/add';
$route['edit-manufacture-range'] = 'backend/ManufactureRange/edit';
$route['delete-manufacture-range'] = 'backend/ManufactureRange/delete';
/* salient-feature */
$route['salient-feature'] = 'backend/SalientFeature/index';
$route['add-salient-feature'] = 'backend/SalientFeature/add';
$route['edit-salient-feature'] = 'backend/SalientFeature/edit';
$route['delete-salient-feature'] = 'backend/SalientFeature/delete';
/*frontend*/
$route['esg'] = 'Home/esg';
$route['csr-details'] = 'Home/csr_details';
$route['site-map'] = 'Home/site_map';
$route['disclaimer'] = 'Home/disclaimer';
$route['quality-certification'] = 'Home/quality_certification';
$route['highlight'] = 'Home/highlight';
$route['highlight-event'] = 'Home/highlight_event';
$route['highlight-blog'] = 'Home/highlight_blog';
$route['highlight-details'] = 'Home/highlight_details';
$route['subsidiarie'] = 'Home/subsidiarie';
$route['csr-activity'] = 'Home/csr_activity';
$route['quality-assurance'] = 'Home/quality_assurance';
$route['investor-relation'] = 'Home/investor_relation';
$route['locate-us'] = 'Home/locate_us';
$route['career'] = 'Home/career';
$route['products'] = 'Home/products';
$route['product-detail'] = 'Home/product_detail';
$route['about-company-profile'] = 'Home/about_company_profile';
$route['about-milestones'] = 'Home/about_milestones';
$route['about-integrity'] = 'Home/about_integrity';
$route['about-board'] = 'Home/about_board';
$route['leader-details'] = 'Home/leader_detail';
$route['career-form'] = 'Home/career_form';
$route['locate-us-form'] = 'Home/locate_us_form';
$route['manufacturing-range'] = 'Home/manufacturing_range';
$route['about-our-leadership'] = 'Home/about_our_leadership';



// $route['custom-pages'] = 'backend/Pages/index';
$route['custom-pages/(:num)'] = 'backend/Pages/index/$1';

$route['social-links'] = 'backend/SocialLinks/index';
$route['add-social-link'] = 'backend/SocialLinks/add';
$route['edit-social-link'] = 'backend/SocialLinks/edit';
$route['delete-social-link'] = 'backend/SocialLinks/delete';

