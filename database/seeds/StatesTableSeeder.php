<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class StatesTableSeeder extends Seeder
{
    public function run()
    {
        if(DB::table('states')->get()->count() == 0) {

            DB::table('states')->insert([
                [
                    'id' => '245', 'country_id' =>'13', 'name' => 'Auckland'],
                [
                    'id' => '246', 'country_id' =>'13','name' => 'Australian Capital Territory'],
                [
                    'id' => '247', 'country_id' =>'13','name' => 'Balgowlah'],
                [
                    'id' => '248', 'country_id' =>'13','name' => 'Balmain'],
                [
                    'id' => '249', 'country_id' =>'13','name' => 'Bankstown'],
                [
                    'id' => '250', 'country_id' =>'13','name' => 'Baulkham Hills'],
                [
                    'id' => '251', 'country_id' =>'13','name' => 'Bonnet Bay'],
                [
                    'id' => '252', 'country_id' =>'13','name' => 'Camberwell'],
                [
                    'id' => '253', 'country_id' =>'13','name' => 'Carole Park'],
                [
                    'id' => '254', 'country_id' =>'13','name' => 'Castle Hill'],
                [
                    'id' => '255', 'country_id' =>'13','name' => 'Caulfield'],
                [
                    'id' => '256', 'country_id' =>'13','name' => 'Chatswood'],
                [
                    'id' => '257', 'country_id' =>'13','name' => 'Cheltenham'],
                [
                    'id' => '258', 'country_id' =>'13','name' => 'Cherrybrook'],
                [
                    'id' => '259', 'country_id' =>'13','name' => 'Clayton'],
                [
                    'id' => '260', 'country_id' =>'13','name' => 'Collingwood'],
                [
                    'id' => '261', 'country_id' =>'13','name' => 'Frenchs Forest'],
                [
                    'id' => '262', 'country_id' =>'13','name' => 'Hawthorn'],
                [
                    'id' => '263', 'country_id' =>'13','name' => 'Jannnali'],
                [
                    'id' => '264', 'country_id' =>'13','name' => 'Knoxfield'],
                [
                    'id' => '265', 'country_id' =>'13','name' => 'Melbourne'],
                [
                    'id' => '266', 'country_id' =>'13','name' => 'New South Wales'],
                [
                    'id' => '267', 'country_id' =>'13','name' => 'Northern Territory'],
                [
                    'id' => '268', 'country_id' =>'13','name' => 'Perth'],
                [
                    'id' => '269', 'country_id' =>'13','name' => 'Queensland'],
                [
                    'id' => '270', 'country_id' =>'13','name' => 'South Australia'],
                [
                    'id' => '271', 'country_id' =>'13','name' => 'Tasmania'],
                [
                    'id' => '272', 'country_id' =>'13','name' => 'Templestowe'],
                [
                    'id' => '273', 'country_id' =>'13','name' => 'Victoria'],
                [
                    'id' => '274', 'country_id' =>'13','name' => 'Werribee south'],
                [
                    'id' => '275', 'country_id' =>'13','name' => 'Western Australia'],
                [
                    'id' => '276', 'country_id' =>'13','name' => 'Wheeler'],
                [
                    'id' => '277', 'country_id' =>'14','name' => 'Bundesland Salzburg'],
                [
                    'id' => '278',  'country_id' =>'14','name' => 'Bundesland Steiermark'],
                [
                    'id' => '279',  'country_id' =>'14','name' => 'Bundesland Tirol'],
                [
                    'id' => '280',  'country_id' =>'14','name' => 'Burgenland'],
                [
                    'id' => '281',  'country_id' =>'14','name' => 'Carinthia'],
                [
                    'id' => '282',  'country_id' =>'14','name' => 'Karnten'],
                [
                    'id' => '283',  'country_id' =>'14','name' => 'Liezen'],
                [
                    'id' => '284',  'country_id' =>'14','name' => 'Lower Austria'],
                [
                    'id' => '285',  'country_id' =>'14','name' => 'Niederosterreich'],
                [
                    'id' => '286',  'country_id' =>'14','name' => 'Oberosterreich'],
                [
                    'id' => '287',  'country_id' =>'14','name' => 'Salzburg'],
                [
                    'id' => '288',  'country_id' =>'14','name' => 'Schleswig-Holstein'],
                [
                    'id' => '289',  'country_id' =>'14','name' => 'Steiermark'],
                [
                    'id' => '290',  'country_id' =>'14','name' => 'Styria'],
                [
                    'id' => '291',  'country_id' =>'14','name' => 'Tirol'],
                [
                    'id' => '292',  'country_id' =>'14','name' => 'Upper Austria'],
                [
                    'id' => '293',  'country_id' =>'14','name' => 'Vorarlberg'],
                [
                    'id' => '294',  'country_id' =>'14','name' => 'Wien'],
                [
                    'id' => '422', 'country_id' =>'21','name' => 'Antwerpen'],
                [
                    'id' => '423', 'country_id' =>'21','name' => 'Berchem'],
                [
                    'id' => '424', 'country_id' =>'21','name' => 'Brabant'],
                [
                    'id' => '425', 'country_id' =>'21','name' => 'Brabant Wallon'],
                [
                    'id' => '426', 'country_id' =>'21','name' => 'Brussel'],
                [
                    'id' => '427', 'country_id' =>'21','name' => 'East Flanders'],
                [
                    'id' => '428', 'country_id' =>'21','name' => 'Hainaut'],
                [
                    'id' => '429', 'country_id' =>'21','name' => 'Liege'],
                [
                    'id' => '430', 'country_id' =>'21','name' => 'Limburg'],
                [
                    'id' => '431', 'country_id' =>'21','name' => 'Luxembourg'],
                [
                    'id' => '432', 'country_id' =>'21','name' => 'Namur'],
                [
                    'id' => '433', 'country_id' =>'21','name' => 'Ontario'],
                [
                    'id' => '434', 'country_id' =>'21','name' => 'Oost-Vlaanderen'],
                [
                    'id' => '435', 'country_id' =>'21','name' => 'Provincie Brabant'],
                [
                    'id' => '436', 'country_id' =>'21','name' => 'Vlaams-Brabant'],
                [
                    'id' => '437', 'country_id' =>'21','name' => 'Wallonne'],
                [
                    'id' => '438', 'country_id' =>'21','name' => 'West-Vlaanderen'],
                [
                    'id' => '663', 'country_id' =>'38','name' => 'Alberta'],
                [
                    'id' => '664', 'country_id' =>'38','name' => 'British Columbia'],
                [
                    'id' => '665', 'country_id' =>'38','name' => 'Manitoba'],
                [
                    'id' => '666', 'country_id' =>'38','name' => 'New Brunswick'],
                [
                    'id' => '667', 'country_id' =>'38','name' => 'Newfoundland and Labrador'],
                [
                    'id' => '668', 'country_id' =>'38','name' => 'Northwest Territories'],
                [
                    'id' => '669', 'country_id' =>'38','name' => 'Nova Scotia'],
                [
                    'id' => '670', 'country_id' =>'38','name' => 'Nunavut'],
                [
                    'id' => '671', 'country_id' =>'38','name' => 'Ontario'],
                [
                    'id' => '672', 'country_id' =>'38','name' => 'Prince Edward Island'],
                [
                    'id' => '673', 'country_id' =>'38','name' => 'Quebec'],
                [
                    'id' => '674', 'country_id' =>'38','name' => 'Saskatchewan'],
                [
                    'id' => '675', 'country_id' =>'38','name' => 'Yukon'],
                [
                    'id' => '731', 'country_id' =>'44','name' => 'Anhui'],
                [
                    'id' => '734', 'country_id' =>'44','name' => 'Aomen'],
                [
                    'id' => '735', 'country_id' =>'44','name' => 'Beijing'],
                [
                    'id' => '736', 'country_id' =>'44','name' => 'Beijing Shi'],
                [
                    'id' => '737', 'country_id' =>'44','name' => 'Chongqing'],
                [
                    'id' => '738', 'country_id' =>'44','name' => 'Fujian'],
                [
                    'id' => '740', 'country_id' =>'44','name' => 'Gansu'],
                [
                    'id' => '741', 'country_id' =>'44','name' => 'Guangdong'],
                [
                    'id' => '743', 'country_id' =>'44','name' => 'Guangxi'],
                [
                    'id' => '744', 'country_id' =>'44','name' => 'Guizhou'],
                [
                    'id' => '745', 'country_id' =>'44','name' => 'Hainan'],
                [
                    'id' => '746', 'country_id' =>'44','name' => 'Hebei'],
                [
                    'id' => '747', 'country_id' =>'44','name' => 'Heilongjiang'],
                [
                    'id' => '748', 'country_id' =>'44','name' => 'Henan'],
                [
                    'id' => '749', 'country_id' =>'44','name' => 'Hubei'],
                [
                    'id' => '750', 'country_id' =>'44','name' => 'Hunan'],
                [
                    'id' => '751', 'country_id' =>'44','name' => 'Jiangsu'],
                [
                    'id' => '753', 'country_id' =>'44','name' => 'Jiangxi'],
                [
                    'id' => '754', 'country_id' =>'44','name' => 'Jilin'],
                [
                    'id' => '755', 'country_id' =>'44','name' => 'Liaoning'],
                [
                    'id' => '757', 'country_id' =>'44','name' => 'Nei Monggol'],
                [
                    'id' => '758', 'country_id' =>'44','name' => 'Ningxia Hui'],
                [
                    'id' => '759', 'country_id' =>'44','name' => 'Qinghai'],
                [
                    'id' => '760', 'country_id' =>'44','name' => 'Shaanxi'],
                [
                    'id' => '761', 'country_id' =>'44','name' => 'Shandong'],
                [
                    'id' => '763', 'country_id' =>'44','name' => 'Shanghai'],
                [
                    'id' => '764', 'country_id' =>'44','name' => 'Shanxi'],
                [
                    'id' => '765', 'country_id' =>'44','name' => 'Sichuan'],
                [
                    'id' => '766', 'country_id' =>'44','name' => 'Tianjin'],
                [
                    'id' => '767', 'country_id' =>'44','name' => 'Xianggang'],
                [
                    'id' => '768', 'country_id' =>'44','name' => 'Xinjiang'],
                [
                    'id' => '769', 'country_id' =>'44','name' => 'Xizang'],
                [
                    'id' => '770', 'country_id' =>'44','name' => 'Yunnan'],
                [
                    'id' => '771', 'country_id' =>'44','name' => 'Zhejiang'],
                [
                    'id' => '870', 'country_id' =>'54','name' => 'Bjelovar-Bilogora'],
                [
                    'id' => '871', 'country_id' =>'54','name' => 'Dubrovnik-Neretva'],
                [
                    'id' => '872', 'country_id' =>'54','name' => 'Grad Zagreb'],
                [
                    'id' => '873', 'country_id' =>'54','name' => 'Istra'],
                [
                    'id' => '874', 'country_id' =>'54','name' => 'Karlovac'],
                [
                    'id' => '875', 'country_id' =>'54','name' => 'Koprivnica-Krizhevci'],
                [
                    'id' => '876', 'country_id' =>'54','name' => 'Krapina-Zagorje'],
                [
                    'id' => '877', 'country_id' =>'54','name' => 'Lika-Senj'],
                [
                    'id' => '878', 'country_id' =>'54','name' => 'Medhimurje'],
                [
                    'id' => '879', 'country_id' =>'54','name' => 'Medimurska Zupanija'],
                [
                    'id' => '880', 'country_id' =>'54','name' => 'Osijek-Baranja'],
                [
                    'id' => '881', 'country_id' =>'54','name' => 'Osjecko-Baranjska Zupanija'],
                [
                    'id' => '882', 'country_id' =>'54','name' => 'Pozhega-Slavonija'],
                [
                    'id' => '883', 'country_id' =>'54','name' => 'Primorje-Gorski Kotar'],
                [
                    'id' => '884', 'country_id' =>'54','name' => 'Shibenik-Knin'],
                [
                    'id' => '885', 'country_id' =>'54','name' => 'Sisak-Moslavina'],
                [
                    'id' => '886', 'country_id' =>'54','name' => 'Slavonski Brod-Posavina'],
                [
                    'id' => '887', 'country_id' =>'54','name' => 'Split-Dalmacija'],
                [
                    'id' => '888', 'country_id' =>'54','name' => 'Varazhdin'],
                [
                    'id' => '889', 'country_id' =>'54','name' => 'Virovitica-Podravina'],
                [
                    'id' => '890', 'country_id' =>'54','name' => 'Vukovar-Srijem'],
                [
                    'id' => '891', 'country_id' =>'54','name' => 'Zadar'],
                [
                    'id' => '892', 'country_id' =>'54','name' => 'Zagreb'],
                [
                    'id' => '941', 'country_id' =>'58','name' => 'Arhus'],
                [
                    'id' => '942', 'country_id' =>'58','name' => 'Bornholm'],
                [
                    'id' => '943', 'country_id' =>'58','name' => 'Frederiksborg'],
                [
                    'id' => '944', 'country_id' =>'58','name' => 'Fyn'],
                [
                    'id' => '945', 'country_id' =>'58','name' => 'Hovedstaden'],
                [
                    'id' => '946', 'country_id' =>'58','name' => 'Kobenhavn'],
                [
                    'id' => '947', 'country_id' =>'58','name' => 'Kobenhavns Amt'],
                [
                    'id' => '948', 'country_id' =>'58','name' => 'Kobenhavns Kommune'],
                [
                    'id' => '949', 'country_id' =>'58','name' => 'Nordjylland'],
                [
                    'id' => '950', 'country_id' =>'58','name' => 'Ribe'],
                [
                    'id' => '951', 'country_id' =>'58','name' => 'Ringkobing'],
                [
                    'id' => '952', 'country_id' =>'58','name' => 'Roervig'],
                [
                    'id' => '953', 'country_id' =>'58','name' => 'Roskilde'],
                [
                    'id' => '954', 'country_id' =>'58','name' => 'Roslev'],
                [
                    'id' => '955', 'country_id' =>'58','name' => 'Sjaelland'],
                [
                    'id' => '956', 'country_id' =>'58','name' => 'Soeborg'],
                [
                    'id' => '957', 'country_id' =>'58','name' => 'Sonderjylland'],
                [
                    'id' => '958', 'country_id' =>'58','name' => 'Storstrom'],
                [
                    'id' => '959', 'country_id' =>'58','name' => 'Syddanmark'],
                [
                    'id' => '960', 'country_id' =>'58','name' => 'Toelloese'],
                [
                    'id' => '961', 'country_id' =>'58','name' => 'Vejle'],
                [
                    'id' => '962', 'country_id' =>'58','name' => 'Vestsjalland'],
                [
                    'id' => '963', 'country_id' =>'58','name' => 'Viborg'],
                [
                    'id' => '1151', 'country_id' =>'74','name' => 'Ahvenanmaa'],
                [
                    'id' => '1152', 'country_id' =>'74','name' => 'Etela-Karjala'],
                [
                    'id' => '1153', 'country_id' =>'74','name' => 'Etela-Pohjanmaa'],
                [
                    'id' => '1154', 'country_id' =>'74','name' => 'Etela-Savo'],
                [
                    'id' => '1155', 'country_id' =>'74','name' => 'Etela-Suomen Laani'],
                [
                    'id' => '1156', 'country_id' =>'74','name' => 'Ita-Suomen Laani'],
                [
                    'id' => '1157', 'country_id' =>'74','name' => 'Ita-Uusimaa'],
                [
                    'id' => '1158', 'country_id' =>'74','name' => 'Kainuu'],
                [
                    'id' => '1159', 'country_id' =>'74','name' => 'Kanta-Hame'],
                [
                    'id' => '1160', 'country_id' =>'74','name' => 'Keski-Pohjanmaa'],
                [
                    'id' => '1161', 'country_id' =>'74','name' => 'Keski-Suomi'],
                [
                    'id' => '1162', 'country_id' =>'74','name' => 'Kymenlaakso'],
                [
                    'id' => '1163', 'country_id' =>'74','name' => 'Lansi-Suomen Laani'],
                [
                    'id' => '1164', 'country_id' =>'74','name' => 'Lappi'],
                [
                    'id' => '1165', 'country_id' =>'74','name' => 'Northern Savonia'],
                [
                    'id' => '1166', 'country_id' =>'74','name' => 'Ostrobothnia'],
                [
                    'id' => '1167', 'country_id' =>'74','name' => 'Oulun Laani'],
                [
                    'id' => '1168', 'country_id' =>'74','name' => 'Paijat-Hame'],
                [
                    'id' => '1169', 'country_id' =>'74','name' => 'Pirkanmaa'],
                [
                    'id' => '1170', 'country_id' =>'74','name' => 'Pohjanmaa'],
                [
                    'id' => '1171', 'country_id' =>'74','name' => 'Pohjois-Karjala'],
                [
                    'id' => '1172', 'country_id' =>'74','name' => 'Pohjois-Pohjanmaa'],
                [
                    'id' => '1173', 'country_id' =>'74','name' => 'Pohjois-Savo'],
                [
                    'id' => '1174', 'country_id' =>'74','name' => 'Saarijarvi'],
                [
                    'id' => '1175', 'country_id' =>'74','name' => 'Satakunta'],
                [
                    'id' => '1176', 'country_id' =>'74','name' => 'Southern Savonia'],
                [
                    'id' => '1177', 'country_id' =>'74','name' => 'Tavastia Proper'],
                [
                    'id' => '1178', 'country_id' =>'74','name' => 'Uleaborgs Lan'],
                [
                    'id' => '1179', 'country_id' =>'74','name' => 'Uusimaa'],
                [
                    'id' => '1180', 'country_id' =>'74','name' => 'Varsinais-Suomi'],



                [
                    'id' => '1181', 'country_id' =>'75','name' => 'Ain'],
                [
                    'id' => '1182', 'country_id' =>'75','name' => 'Aisne'],
                [
                    'id' => '1183', 'country_id' =>'75','name' => 'Albi Le Sequestre'],
                [
                    'id' => '1184', 'country_id' =>'75','name' => 'Allier'],
                [
                    'id' => '1185', 'country_id' =>'75','name' => 'Alpes-Cote dAzur'],
                [
                    'id' => '1186', 'country_id' =>'75','name' => 'Alpes-Maritimes'],
                [
                    'id' => '1187', 'country_id' =>'75','name' => 'Alpes-de-Haute-Provence'],
                [
                    'id' => '1188', 'country_id' =>'75','name' => 'Alsace'],
                [
                    'id' => '1189', 'country_id' =>'75','name' => 'Aquitaine'],
                [
                    'id' => '1190', 'country_id' =>'75','name' => 'Ardeche'],
                [
                    'id' => '1191', 'country_id' =>'75','name' => 'Ardennes'],
                [
                    'id' => '1192', 'country_id' =>'75','name' => 'Ariege'],
                [
                    'id' => '1193', 'country_id' =>'75','name' => 'Aube'],
                [
                    'id' => '1194', 'country_id' =>'75','name' => 'Aude'],
                [
                    'id' => '1195', 'country_id' =>'75','name' => 'Auvergne'],
                [
                    'id' => '1196', 'country_id' =>'75','name' => 'Aveyron'],
                [
                    'id' => '1197', 'country_id' =>'75','name' => 'Bas-Rhin'],
                [
                    'id' => '1198', 'country_id' =>'75','name' => 'Basse-Normandie'],
                [
                    'id' => '1199', 'country_id' =>'75','name' => 'Bouches-du-Rhone'],
                [
                    'id' => '1200', 'country_id' =>'75','name' => 'Bourgogne'],
                [
                    'id' => '1201', 'country_id' =>'75','name' => 'Bretagne'],
                [
                    'id' => '1202', 'country_id' =>'75','name' => 'Brittany'],
                [
                    'id' => '1203', 'country_id' =>'75','name' => 'Burgundy'],
                [
                    'id' => '1204', 'country_id' =>'75','name' => 'Calvados'],
                [
                    'id' => '1205', 'country_id' =>'75','name' => 'Cantal'],
                [
                    'id' => '1206', 'country_id' =>'75','name' => 'Cedex'],
                [
                    'id' => '1207', 'country_id' =>'75','name' => 'Centre'],
                [
                    'id' => '1208', 'country_id' =>'75','name' => 'Charente'],
                [
                    'id' => '1209', 'country_id' =>'75','name' => 'Charente-Maritime'],
                [
                    'id' => '1210', 'country_id' =>'75','name' => 'Cher'],
                [
                    'id' => '1211', 'country_id' =>'75','name' => 'Correze'],
                [
                    'id' => '1212', 'country_id' =>'75','name' => 'Corse-du-Sud'],
                [
                    'id' => '1213', 'country_id' =>'75','name' => 'Cote-dOr'],
[
    'id' => '1214', 'country_id' =>'75','name' => 'Cotes-dArmor'],
[
    'id' => '1215', 'country_id' =>'75','name' => 'Creuse'],
[
    'id' => '1216', 'country_id' =>'75','name' => 'Crolles'],
[
    'id' => '1217', 'country_id' =>'75','name' => 'Deux-Sevres'],
[
    'id' => '1218', 'country_id' =>'75','name' => 'Dordogne'],
[
    'id' => '1219', 'country_id' =>'75','name' => 'Doubs'],
[
    'id' => '1220', 'country_id' =>'75','name' => 'Drome'],
[
    'id' => '1221', 'country_id' =>'75','name' => 'Essonne'],
[
    'id' => '1222', 'country_id' =>'75','name' => 'Eure'],
[
    'id' => '1223', 'country_id' =>'75','name' => 'Eure-et-Loir'],
[
    'id' => '1224', 'country_id' =>'75','name' => 'Feucherolles'],
[
    'id' => '1225', 'country_id' =>'75','name' => 'Finistere'],
[
    'id' => '1226', 'country_id' =>'75','name' => 'Franche-Comte'],
[
    'id' => '1227', 'country_id' =>'75','name' => 'Gard'],
[
    'id' => '1228', 'country_id' =>'75','name' => 'Gers'],
[
    'id' => '1229', 'country_id' =>'75','name' => 'Gironde'],
[
    'id' => '1230', 'country_id' =>'75','name' => 'Haut-Rhin'],
[
    'id' => '1231', 'country_id' =>'75','name' => 'Haute-Corse'],
[
    'id' => '1232', 'country_id' =>'75','name' => 'Haute-Garonne'],
[
    'id' => '1233', 'country_id' =>'75','name' => 'Haute-Loire'],
[
    'id' => '1234', 'country_id' =>'75','name' => 'Haute-Marne'],
[
    'id' => '1235', 'country_id' =>'75','name' => 'Haute-Saone'],
[
    'id' => '1236', 'country_id' =>'75','name' => 'Haute-Savoie'],
[
    'id' => '1237', 'country_id' =>'75','name' => 'Haute-Vienne'],
[
    'id' => '1238', 'country_id' =>'75','name' => 'Hautes-Alpes'],
[
    'id' => '1239', 'country_id' =>'75','name' => 'Hautes-Pyrenees'],
[
    'id' => '1240', 'country_id' =>'75','name' => 'Hauts-de-Seine'],
[
    'id' => '1241', 'country_id' =>'75','name' => 'Herault'],
[
    'id' => '1242', 'country_id' =>'75','name' => 'Ile-de-France'],
[
    'id' => '1243', 'country_id' =>'75','name' => 'Ille-et-Vilaine'],
[
    'id' => '1244', 'country_id' =>'75','name' => 'Indre'],
[
    'id' => '1245', 'country_id' =>'75','name' => 'Indre-et-Loire'],
[
    'id' => '1246', 'country_id' =>'75','name' => 'Isere'],
[
    'id' => '1247', 'country_id' =>'75','name' => 'Jura'],
[
    'id' => '1248', 'country_id' =>'75','name' => 'Klagenfurt'],
[
    'id' => '1249', 'country_id' =>'75','name' => 'Landes'],
[
    'id' => '1250', 'country_id' =>'75','name' => 'Languedoc-Roussillon'],
[
    'id' => '1251', 'country_id' =>'75','name' => 'Larcay'],
[
    'id' => '1252', 'country_id' =>'75','name' => 'Le Castellet'],
[
    'id' => '1253', 'country_id' =>'75','name' => 'Le Creusot'],
[
    'id' => '1254', 'country_id' =>'75','name' => 'Limousin'],
[
    'id' => '1255', 'country_id' =>'75','name' => 'Loir-et-Cher'],
[
    'id' => '1256', 'country_id' =>'75','name' => 'Loire'],
[
    'id' => '1257', 'country_id' =>'75','name' => 'Loire-Atlantique'],
[
    'id' => '1258', 'country_id' =>'75','name' => 'Loiret'],
[
    'id' => '1259', 'country_id' =>'75','name' => 'Lorraine'],
[
    'id' => '1260', 'country_id' =>'75','name' => 'Lot'],
[
    'id' => '1261', 'country_id' =>'75','name' => 'Lot-et-Garonne'],
[
    'id' => '1262', 'country_id' =>'75','name' => 'Lower Normandy'],
[
    'id' => '1263', 'country_id' =>'75','name' => 'Lozere'],
[
    'id' => '1264', 'country_id' =>'75','name' => 'Maine-et-Loire'],
[
    'id' => '1265', 'country_id' =>'75','name' => 'Manche'],
[
    'id' => '1266', 'country_id' =>'75','name' => 'Marne'],
[
    'id' => '1267', 'country_id' =>'75','name' => 'Mayenne'],
[
    'id' => '1268', 'country_id' =>'75','name' => 'Meurthe-et-Moselle'],
[
    'id' => '1269', 'country_id' =>'75','name' => 'Meuse'],
[
    'id' => '1270', 'country_id' =>'75','name' => 'Midi-Pyrenees'],
[
    'id' => '1271', 'country_id' =>'75','name' => 'Morbihan'],
[
    'id' => '1272', 'country_id' =>'75','name' => 'Moselle'],
[
    'id' => '1273', 'country_id' =>'75','name' => 'Nievre'],
[
    'id' => '1274', 'country_id' =>'75','name' => 'Nord'],
[
    'id' => '1275', 'country_id' =>'75','name' => 'Nord-Pas-de-Calais'],
[
    'id' => '1276', 'country_id' =>'75','name' => 'Oise'],
[
    'id' => '1277', 'country_id' =>'75','name' => 'Orne'],
[
    'id' => '1278', 'country_id' =>'75','name' => 'Paris'],
[
    'id' => '1279', 'country_id' =>'75','name' => 'Pas-de-Calais'],
[
    'id' => '1280', 'country_id' =>'75','name' => 'Pays de la Loire'],
[
    'id' => '1281', 'country_id' =>'75','name' => 'Pays-de-la-Loire'],
[
    'id' => '1282', 'country_id' =>'75','name' => 'Picardy'],
[
    'id' => '1283', 'country_id' =>'75','name' => 'Puy-de-Dome'],
[
    'id' => '1284', 'country_id' =>'75','name' => 'Pyrenees-Atlantiques'],
[
    'id' => '1285', 'country_id' =>'75','name' => 'Pyrenees-Orientales'],
[
    'id' => '1286', 'country_id' =>'75','name' => 'Quelmes'],
[
    'id' => '1287', 'country_id' =>'75','name' => 'Rhone'],
[
    'id' => '1288', 'country_id' =>'75','name' => 'Rhone-Alpes'],
[
    'id' => '1289', 'country_id' =>'75','name' => 'Saint Ouen'],
[
    'id' => '1290', 'country_id' =>'75','name' => 'Saint Viatre'],
[
    'id' => '1291', 'country_id' =>'75','name' => 'Saone-et-Loire'],
[
    'id' => '1292', 'country_id' =>'75','name' => 'Sarthe'],
[
    'id' => '1293', 'country_id' =>'75','name' => 'Savoie'],
[
    'id' => '1294', 'country_id' =>'75','name' => 'Seine-Maritime'],
[
    'id' => '1295', 'country_id' =>'75','name' => 'Seine-Saint-Denis'],
[
    'id' => '1296', 'country_id' =>'75','name' => 'Seine-et-Marne'],
[
    'id' => '1297', 'country_id' =>'75','name' => 'Somme'],
[
    'id' => '1298', 'country_id' =>'75','name' => 'Sophia Antipolis'],
[
    'id' => '1299', 'country_id' =>'75','name' => 'Souvans'],
[
    'id' => '1300', 'country_id' =>'75','name' => 'Tarn'],
[
    'id' => '1301', 'country_id' =>'75','name' => 'Tarn-et-Garonne'],
[
    'id' => '1302', 'country_id' =>'75','name' => 'Territoire de Belfort'],
[
    'id' => '1303', 'country_id' =>'75','name' => 'Treignac'],
[
    'id' => '1304', 'country_id' =>'75','name' => 'Upper Normandy'],
[
    'id' => '1305', 'country_id' =>'75','name' => 'Val-dOise'],
[
    'id' => '1306', 'country_id' =>'75','name' => 'Val-de-Marne'],
[
    'id' => '1307', 'country_id' =>'75','name' => 'Var'],
[
    'id' => '1308', 'country_id' =>'75','name' => 'Vaucluse'],
[
    'id' => '1309', 'country_id' =>'75','name' => 'Vellise'],
[
    'id' => '1310', 'country_id' =>'75','name' => 'Vendee'],
[
    'id' => '1311', 'country_id' =>'75','name' => 'Vienne'],
[
    'id' => '1312', 'country_id' =>'75','name' => 'Vosges'],
[
    'id' => '1313', 'country_id' =>'75','name' => 'Yonne'],
[
    'id' => '1314', 'country_id' =>'75','name' => 'Yvelines'],
            [
                'id' => '1354', 'country_id' =>'82','name' => 'Auvergne'],
[
    'id' => '1355', 'country_id' =>'82','name' => 'Baden-Wurttemberg'],
[
    'id' => '1356', 'country_id' =>'82','name' => 'Bavaria'],
[
    'id' => '1357', 'country_id' =>'82','name' => 'Bayern'],
[
    'id' => '1358', 'country_id' =>'82','name' => 'Beilstein Wurtt'],
[
    'id' => '1359', 'country_id' =>'82','name' => 'Berlin'],
[
    'id' => '1360', 'country_id' =>'82','name' => 'Brandenburg'],
[
    'id' => '1361', 'country_id' =>'82','name' => 'Bremen'],
[
    'id' => '1362', 'country_id' =>'82','name' => 'Dreisbach'],
[
    'id' => '1363', 'country_id' =>'82','name' => 'Freistaat Bayern'],
[
    'id' => '1364', 'country_id' =>'82','name' => 'Hamburg'],
[
    'id' => '1365', 'country_id' =>'82','name' => 'Hannover'],
[
    'id' => '1366', 'country_id' =>'82','name' => 'Heroldstatt'],
[
    'id' => '1367', 'country_id' =>'82','name' => 'Hessen'],
[
    'id' => '1368', 'country_id' =>'82','name' => 'Kortenberg'],
[
    'id' => '1369', 'country_id' =>'82','name' => 'Laasdorf'],
[
    'id' => '1370', 'country_id' =>'82','name' => 'Land Baden-Wurttemberg'],
[
    'id' => '1371', 'country_id' =>'82','name' => 'Land Bayern'],
[
    'id' => '1372', 'country_id' =>'82','name' => 'Land Brandenburg'],
[
    'id' => '1373', 'country_id' =>'82','name' => 'Land Hessen'],
[
    'id' => '1374', 'country_id' =>'82','name' => 'Land Mecklenburg-Vorpommern'],
[
    'id' => '1375', 'country_id' =>'82','name' => 'Land Nordrhein-Westfalen'],
[
    'id' => '1376', 'country_id' =>'82','name' => 'Land Rheinland-Pfalz'],
[
    'id' => '1377', 'country_id' =>'82','name' => 'Land Sachsen'],
[
    'id' => '1378', 'country_id' =>'82','name' => 'Land Sachsen-Anhalt'],
[
    'id' => '1379', 'country_id' =>'82','name' => 'Land Thuringen'],
[
    'id' => '1380', 'country_id' =>'82','name' => 'Lower Saxony'],
[
    'id' => '1381', 'country_id' =>'82','name' => 'Mecklenburg-Vorpommern'],
[
    'id' => '1382', 'country_id' =>'82','name' => 'Mulfingen'],
[
    'id' => '1383', 'country_id' =>'82','name' => 'Munich'],
[
    'id' => '1384', 'country_id' =>'82','name' => 'Neubeuern'],
[
    'id' => '1385', 'country_id' =>'82','name' => 'Niedersachsen'],
[
    'id' => '1386', 'country_id' =>'82','name' => 'Noord-Holland'],
[
    'id' => '1387', 'country_id' =>'82','name' => 'Nordrhein-Westfalen'],
[
    'id' => '1388', 'country_id' =>'82','name' => 'North Rhine-Westphalia'],
[
    'id' => '1389', 'country_id' =>'82','name' => 'Osterode'],
[
    'id' => '1390', 'country_id' =>'82','name' => 'Rheinland-Pfalz'],
[
    'id' => '1391', 'country_id' =>'82','name' => 'Rhineland-Palatinate'],
[
    'id' => '1392', 'country_id' =>'82','name' => 'Saarland'],
[
    'id' => '1393', 'country_id' =>'82','name' => 'Sachsen'],
[
    'id' => '1394', 'country_id' =>'82','name' => 'Sachsen-Anhalt'],
[
    'id' => '1395', 'country_id' =>'82','name' => 'Saxony'],
[
    'id' => '1396', 'country_id' =>'82','name' => 'Schleswig-Holstein'],
[
    'id' => '1397', 'country_id' =>'82','name' => 'Thuringia'],
[
    'id' => '1398', 'country_id' =>'82','name' => 'Webling'],
[
    'id' => '1399', 'country_id' =>'82','name' => 'Weinstrabe'],
[
    'id' => '1400', 'country_id' =>'82','name' => 'schlobborn'],
            [
                'id' => '1657', 'country_id' =>'100','name' => 'Austurland'],
[
    'id' => '1658', 'country_id' =>'100','name' => 'Gullbringusysla'],
[
    'id' => '1659', 'country_id' =>'100','name' => 'Hofu borgarsva i'],
[
    'id' => '1660', 'country_id' =>'100','name' => 'Nor urland eystra'],
[
    'id' => '1661', 'country_id' =>'100','name' => 'Nor urland vestra'],
[
    'id' => '1662', 'country_id' =>'100','name' => 'Su urland'],
[
    'id' => '1663', 'country_id' =>'100','name' => 'Su urnes'],
[
    'id' => '1664', 'country_id' =>'100','name' => 'Vestfir ir'],
[
    'id' => '1665', 'country_id' =>'100','name' => 'Vesturland'],
            [
                'id' => '1749', 'country_id' =>'105','name' => 'Armagh'],
[
    'id' => '1750', 'country_id' =>'105','name' => 'Carlow'],
[
    'id' => '1751', 'country_id' =>'105','name' => 'Cavan'],
[
    'id' => '1752', 'country_id' =>'105','name' => 'Clare'],
[
    'id' => '1753', 'country_id' =>'105','name' => 'Cork'],
[
    'id' => '1754', 'country_id' =>'105','name' => 'Donegal'],
[
    'id' => '1755', 'country_id' =>'105','name' => 'Dublin'],
[
    'id' => '1756', 'country_id' =>'105','name' => 'Galway'],
[
    'id' => '1757', 'country_id' =>'105','name' => 'Kerry'],
[
    'id' => '1758', 'country_id' =>'105','name' => 'Kildare'],
[
    'id' => '1759', 'country_id' =>'105','name' => 'Kilkenny'],
[
    'id' => '1760', 'country_id' =>'105','name' => 'Laois'],
[
    'id' => '1761', 'country_id' =>'105','name' => 'Leinster'],
[
    'id' => '1762', 'country_id' =>'105','name' => 'Leitrim'],
[
    'id' => '1763', 'country_id' =>'105','name' => 'Limerick'],
[
    'id' => '1764', 'country_id' =>'105','name' => 'Loch Garman'],
[
    'id' => '1765', 'country_id' =>'105','name' => 'Longford'],
[
    'id' => '1766', 'country_id' =>'105','name' => 'Louth'],
[
    'id' => '1767', 'country_id' =>'105','name' => 'Mayo'],
[
    'id' => '1768', 'country_id' =>'105','name' => 'Meath'],
[
    'id' => '1769', 'country_id' =>'105','name' => 'Monaghan'],
[
    'id' => '1770', 'country_id' =>'105','name' => 'Offaly'],
[
    'id' => '1771', 'country_id' =>'105','name' => 'Roscommon'],
[
    'id' => '1772', 'country_id' =>'105','name' => 'Sligo'],
[
    'id' => '1773', 'country_id' =>'105','name' => 'Tipperary North Riding'],
[
    'id' => '1774', 'country_id' =>'105','name' => 'Tipperary South Riding'],
[
    'id' => '1775', 'country_id' =>'105','name' => 'Ulster'],
[
    'id' => '1776', 'country_id' =>'105','name' => 'Waterford'],
[
    'id' => '1777', 'country_id' =>'105','name' => 'Westmeath'],
[
    'id' => '1778', 'country_id' =>'105','name' => 'Wexford'],
[
    'id' => '1779', 'country_id' =>'105','name' => 'Wicklow'],
                [
                    'id' => '1918', 'country_id' =>'109','name' => 'Aichi'],
                [
                    'id' => '1919', 'country_id' =>'109','name' => 'Akita'],
                [
                    'id' => '1920', 'country_id' =>'109','name' => 'Aomori'],
                [
                    'id' => '1921', 'country_id' =>'109','name' => 'Chiba'],
                [
                    'id' => '1922', 'country_id' =>'109','name' => 'Ehime'],
                [
                    'id' => '1923', 'country_id' =>'109','name' => 'Fukui'],
                [
                    'id' => '1924', 'country_id' =>'109','name' => 'Fukuoka'],
                [
                    'id' => '1925', 'country_id' =>'109','name' => 'Fukushima'],
                [
                    'id' => '1926', 'country_id' =>'109','name' => 'Gifu'],
                [
                    'id' => '1927', 'country_id' =>'109','name' => 'Gumma'],
                [
                    'id' => '1928', 'country_id' =>'109','name' => 'Hiroshima'],
                [
                    'id' => '1929', 'country_id' =>'109','name' => 'Hokkaido'],
                [
                    'id' => '1930', 'country_id' =>'109','name' => 'Hyogo'],
                [
                    'id' => '1931', 'country_id' =>'109','name' => 'Ibaraki'],
                [
                    'id' => '1932', 'country_id' =>'109','name' => 'Ishikawa'],
                [
                    'id' => '1933', 'country_id' =>'109','name' => 'Iwate'],
                [
                    'id' => '1934', 'country_id' =>'109','name' => 'Kagawa'],
                [
                    'id' => '1935', 'country_id' =>'109','name' => 'Kagoshima'],
                [
                    'id' => '1936', 'country_id' =>'109','name' => 'Kanagawa'],
                [
                    'id' => '1937', 'country_id' =>'109','name' => 'Kanto'],
                [
                    'id' => '1938', 'country_id' =>'109','name' => 'Kochi'],
                [
                    'id' => '1939', 'country_id' =>'109','name' => 'Kumamoto'],
                [
                    'id' => '1940', 'country_id' =>'109','name' => 'Kyoto'],
                [
                    'id' => '1941', 'country_id' =>'109','name' => 'Mie'],
                [
                    'id' => '1942', 'country_id' =>'109','name' => 'Miyagi'],
                [
                    'id' => '1943', 'country_id' =>'109','name' => 'Miyazaki'],
                [
                    'id' => '1944', 'country_id' =>'109','name' => 'Nagano'],
                [
                    'id' => '1945', 'country_id' =>'109','name' => 'Nagasaki'],
                [
                    'id' => '1946', 'country_id' =>'109','name' => 'Nara'],
                [
                    'id' => '1947', 'country_id' =>'109','name' => 'Niigata'],
                [
                    'id' => '1948', 'country_id' =>'109','name' => 'Oita'],
                [
                    'id' => '1949', 'country_id' =>'109','name' => 'Okayama'],
                [
                    'id' => '1950', 'country_id' =>'109','name' => 'Okinawa'],
                [
                    'id' => '1951', 'country_id' =>'109','name' => 'Osaka'],
                [
                    'id' => '1952', 'country_id' =>'109','name' => 'Saga'],
                [
                    'id' => '1953', 'country_id' =>'109','name' => 'Saitama'],
                [
                    'id' => '1954', 'country_id' =>'109','name' => 'Shiga'],
                [
                    'id' => '1955', 'country_id' =>'109','name' => 'Shimane'],
                [
                    'id' => '1956', 'country_id' =>'109','name' => 'Shizuoka'],
                [
                    'id' => '1957', 'country_id' =>'109','name' => 'Tochigi'],
                [
                    'id' => '1958', 'country_id' =>'109','name' => 'Tokushima'],
                [
                    'id' => '1959', 'country_id' =>'109','name' => 'Tokyo'],
                [
                    'id' => '1960', 'country_id' =>'109','name' => 'Tottori'],
                [
                    'id' => '1961', 'country_id' =>'109','name' => 'Toyama'],
                [
                    'id' => '1962', 'country_id' =>'109','name' => 'Wakayama'],
                [
                    'id' => '1963', 'country_id' =>'109','name' => 'Yamagata'],
                [
                    'id' => '1964', 'country_id' =>'109','name' => 'Yamaguchi'],
                [
                    'id' => '1965', 'country_id' =>'109','name' => 'Yamanashi'],
                [
                    'id' => '2047', 'country_id' => '116', 'name' =>'Busan'],
                [
                    'id' => '2048', 'country_id' => '116', 'name' =>'Cheju'],
                [
                    'id' => '2049', 'country_id' => '116', 'name' =>'Chollabuk'],
                [
                    'id' => '2050', 'country_id' => '116', 'name' =>'Chollanam'],
                [
                    'id' => '2051', 'country_id' => '116', 'name' =>'Chungbuk'],
                [
                    'id' => '2052', 'country_id' => '116', 'name' =>'Chungcheongbuk'],
                [
                    'id' => '2053', 'country_id' => '116', 'name' =>'Chungcheongnam'],
                [
                    'id' => '2054', 'country_id' => '116', 'name' =>'Chungnam'],
                [
                    'id' => '2055', 'country_id' => '116', 'name' =>'Daegu'],
                [
                    'id' => '2056', 'country_id' => '116', 'name' =>'Gangwon-do'],
                [
                    'id' => '2057', 'country_id' => '116', 'name' =>'Goyang-si'],
                [
                    'id' => '2058', 'country_id' => '116', 'name' =>'Gyeonggi-do'],
                [
                    'id' => '2059', 'country_id' => '116', 'name' =>'Gyeongsang '],
                [
                    'id' => '2060', 'country_id' => '116', 'name' =>'Gyeongsangnam-do'],

                [
                    'id' => '2061', 'country_id' => '116', 'name' => 'Incheon'],
                [
                    'id' => '2062', 'country_id' => '116', 'name' => 'Jeju-Si'],
                [
                    'id' => '2063', 'country_id' => '116', 'name' => 'Jeonbuk'],
                [
                    'id' => '2064', 'country_id' => '116', 'name' => 'Kangweon'],
                [
                    'id' => '2065', 'country_id' => '116', 'name' => 'Kwangju'],
                [
                    'id' => '2066', 'country_id' => '116', 'name' => 'Kyeonggi'],
                [
                    'id' => '2067', 'country_id' => '116', 'name' => 'Kyeongsangbuk'],
                [
                    'id' => '2068', 'country_id' => '116', 'name' => 'Kyeongsangnam'],
                [
                    'id' => '2069', 'country_id' => '116', 'name' => 'Kyonggi-do'],
                [
                    'id' => '2070', 'country_id' => '116', 'name' => 'Kyungbuk-Do'],
                [
                    'id' => '2071', 'country_id' => '116', 'name' => 'Kyunggi-Do'],
                [
                    'id' => '2072', 'country_id' => '116', 'name' => 'Kyunggi-do'],
                [
                    'id' => '2073', 'country_id' => '116', 'name' => 'Pusan'],
                [
                    'id' => '2074', 'country_id' => '116', 'name' => 'Seoul'],
                [
                    'id' => '2075', 'country_id' => '116', 'name' => 'Sudogwon'],
                [
                    'id' => '2076', 'country_id' => '116', 'name' => 'Taegu'],
                [
                    'id' => '2077', 'country_id' => '116', 'name' => 'Taejeon'],
                [
                    'id' => '2078', 'country_id' => '116', 'name' => 'Taejon-gwangyoksi'],
                [
                    'id' => '2079', 'country_id' => '116', 'name' => 'Ulsan'],
                [
                    'id' => '2080', 'country_id' => '116', 'name' => 'Wonju'],
                [
                    'id' => '2081', 'country_id' => '116', 'name' => 'Gwangyoksi'],
                [
                    'id' => '2207', 'country_id' => '125', 'name' => 'Balzers'],
                [
                    'id' => '2208', 'country_id' => '125', 'name' => 'Eschen'],
                [
                    'id' => '2209', 'country_id' => '125', 'name' => 'Gamprin'],
                [
                    'id' => '2210', 'country_id' => '125', 'name' => 'Mauren'],
                [
                    'id' => '2211', 'country_id' => '125', 'name' => 'Planken'],
                [
                    'id' => '2212', 'country_id' => '125', 'name' => 'Ruggell'],
                [
                    'id' => '2213', 'country_id' => '125', 'name' => 'Schaan'],
                [
                    'id' => '2214', 'country_id' => '125', 'name' => 'Schellenberg'],
                [
                    'id' => '2215', 'country_id' => '125', 'name' => 'Triesen'],
                [
                    'id' => '2216', 'country_id' => '125', 'name' => 'Triesenberg'],
                [
                    'id' => '2217', 'country_id' => '125', 'name' => 'Vaduz'],
                [
                    'id' => '2231', 'country_id' => '127', 'name' => 'Capellen'],
                [
                    'id' => '2232', 'country_id' => '127', 'name' => 'Clervaux'],
                [
                    'id' => '2233', 'country_id' => '127', 'name' => 'Diekirch'],
                [
                    'id' => '2234', 'country_id' => '127', 'name' => 'Echternach'],
                [
                    'id' => '2235', 'country_id' => '127', 'name' => 'Esch-sur-Alzette'],
                [
                    'id' => '2236', 'country_id' => '127', 'name' => 'Grevenmacher'],
                [
                    'id' => '2237', 'country_id' => '127', 'name' => 'Luxembourg'],
                [
                    'id' => '2238', 'country_id' => '127', 'name' => 'Mersch'],
                [
                    'id' => '2239', 'country_id' => '127', 'name' => 'Redange'],
                [
                    'id' => '2240', 'country_id' => '127', 'name' => 'Remich'],
                [
                    'id' => '2241', 'country_id' => '127', 'name' => 'Vianden'],
                [
                    'id' => '2242', 'country_id' => '127', 'name' => 'Wiltz'],
                [
                    'id' => '2355', 'country_id' => '135', 'name' => 'Gozo and Comino'],
                [
                    'id' => '2356', 'country_id' => '135', 'name' => 'Inner Harbour'],
                [
                    'id' => '2357', 'country_id' => '135', 'name' => 'Northern'],
                [
                    'id' => '2358', 'country_id' => '135', 'name' => 'Outer Harbour'],
                [
                    'id' => '2359', 'country_id' => '135', 'name' => 'South Eastern'],
                [
                    'id' => '2360', 'country_id' => '135', 'name' => 'Valletta'],
                [
                    'id' => '2361', 'country_id' => '135', 'name' => 'Western'],
                [
                    'id' => '2477', 'country_id' => '145', 'name' => 'Fontvieille'],
                [
                    'id' => '2478', 'country_id' => '145', 'name' => 'La Condamine'],
                [
                    'id' => '2479', 'country_id' => '145', 'name' => 'Monaco-Ville'],
                [
                    'id' => '2480', 'country_id' => '145', 'name' => 'Monte Carlo'],
                [
                    'id' => '2585', 'country_id' => '155', 'name' => 'Amsterdam'],
                [
                    'id' => '2586', 'country_id' => '155', 'name' => 'Benelux'],
                [
                    'id' => '2587', 'country_id' => '155', 'name' => 'Drenthe'],
                [
                    'id' => '2588', 'country_id' => '155', 'name' => 'Flevoland'],
                [
                    'id' => '2589', 'country_id' => '155', 'name' => 'Friesland'],
                [
                    'id' => '2590', 'country_id' => '155', 'name' => 'Gelderland'],
                [
                    'id' => '2591', 'country_id' => '155', 'name' => 'Groningen'],
                [
                    'id' => '2592', 'country_id' => '155', 'name' => 'Limburg'],
                [
                    'id' => '2593', 'country_id' => '155', 'name' => 'Noord-Brabant'],
                [
                    'id' => '2594', 'country_id' => '155', 'name' => 'Noord-Holland'],
                [
                    'id' => '2595', 'country_id' => '155', 'name' => 'Overijssel'],
                [
                    'id' => '2596', 'country_id' => '155', 'name' => 'South Holland'],
                [
                    'id' => '2597', 'country_id' => '155', 'name' => 'Utrecht'],
                [
                    'id' => '2598', 'country_id' => '155', 'name' => 'Zeeland'],
                [
                    'id' => '2599', 'country_id' => '155', 'name' => 'Zuid-Holland'],
                [
                    'id' => '2603', 'country_id' => '157', 'name' => 'Area Outside Region'],
                [
                    'id' => '2604', 'country_id' => '157', 'name' => 'Auckland'],
                [
                    'id' => '2605', 'country_id' => '157', 'name' => 'Bay of Plenty'],
                [
                    'id' => '2606', 'country_id' => '157', 'name' => 'Canterbury'],
                [
                    'id' => '2607', 'country_id' => '157', 'name' => 'Christchurch'],
                [
                    'id' => '2608', 'country_id' => '157', 'name' => 'Gisborne'],
                [
                    'id' => '2609', 'country_id' => '157', 'name' => 'Hawkes Bay'],
                [
                    'id' => '2610', 'country_id' => '157', 'name' => 'Manawatu-Wanganui'],
                [
                    'id' => '2611', 'country_id' => '157', 'name' => 'Marlborough'],
                [
                    'id' => '2612', 'country_id' => '157', 'name' => 'Nelson'],
                [
                    'id' => '2613', 'country_id' => '157', 'name' => 'Northland'],
                [
                    'id' => '2614', 'country_id' => '157', 'name' => 'Otago'],
                [
                    'id' => '2615', 'country_id' => '157', 'name' => 'Rodney'],
                [
                    'id' => '2616', 'country_id' => '157', 'name' => 'Southland'],
                [
                    'id' => '2617', 'country_id' => '157', 'name' => 'Taranaki'],
                [
                    'id' => '2618', 'country_id' => '157', 'name' => 'Tasman'],
                [
                    'id' => '2619', 'country_id' => '157', 'name' => 'Waikato'],
                [
                    'id' => '2620', 'country_id' => '157', 'name' => 'Wellington'],
                [
                    'id' => '2621', 'country_id' => '157', 'name' => 'West Coast'],
                [
                    'id' => '2690', 'country_id' => '164', 'name' => 'Akershus'],
                [
                    'id' => '2691', 'country_id' => '164', 'name' => 'Aust Agder'],
                [
                    'id' => '2692', 'country_id' => '164', 'name' => 'Bergen'],
                [
                    'id' => '2693', 'country_id' => '164', 'name' => 'Buskerud'],
                [
                    'id' => '2694', 'country_id' => '164', 'name' => 'Finnmark'],
                [
                    'id' => '2695', 'country_id' => '164', 'name' => 'Hedmark'],
                [
                    'id' => '2696', 'country_id' => '164', 'name' => 'Hordaland'],
                [
                    'id' => '2697', 'country_id' => '164', 'name' => 'Moere og Romsdal'],
                [
                    'id' => '2698', 'country_id' => '164', 'name' => 'Nord Trondelag'],
                [
                    'id' => '2699', 'country_id' => '164', 'name' => 'Nordland'],
                [
                    'id' => '2700', 'country_id' => '164', 'name' => 'Oestfold'],
                [
                    'id' => '2701', 'country_id' => '164', 'name' => 'Oppland'],
                [
                    'id' => '2702', 'country_id' => '164', 'name' => 'Oslo'],
                [
                    'id' => '2703', 'country_id' => '164', 'name' => 'Rogaland'],
                [
                    'id' => '2704', 'country_id' => '164', 'name' => 'Soer Troendelag'],
                [
                    'id' => '2705', 'country_id' => '164', 'name' => 'Sogn og Fjordane'],
                [
                    'id' => '2706', 'country_id' => '164', 'name' => 'Stavern'],
                [
                    'id' => '2707', 'country_id' => '164', 'name' => 'Sykkylven'],
                [
                    'id' => '2708', 'country_id' => '164', 'name' => 'Telemark'],
                [
                    'id' => '2709', 'country_id' => '164', 'name' => 'Troms'],
                [
                    'id' => '2710', 'country_id' => '164', 'name' => 'Vest Agder'],
                [
                    'id' => '2711', 'country_id' => '164', 'name' => 'Vestfold'],
                [
                    'id' => '2712', 'country_id' => '164', 'name' => 'ÃƒÂ˜stfold'],
                [
                    'id' => '2896', 'country_id' => '176' , 'name' => 'Abrantes'],
                [
                    'id' => '2897', 'country_id' => '176' , 'name' => 'Acores'],
                [
                    'id' => '2898', 'country_id' => '176' , 'name' => 'Alentejo'],
                [
                    'id' => '2899', 'country_id' => '176' , 'name' => 'Algarve'],
                [
                    'id' => '2900', 'country_id' => '176' , 'name' => 'Braga'],
                [
                    'id' => '2901', 'country_id' => '176' , 'name' => 'Centro'],
                [
                    'id' => '2902', 'country_id' => '176' , 'name' => 'Distrito de Leiria'],
                [
                    'id' => '2903', 'country_id' => '176' , 'name' => 'Distrito de Viana do Castelo'],
                [
                    'id' => '2904', 'country_id' => '176' , 'name' => 'Distrito de Vila Real'],
                [
                    'id' => '2905', 'country_id' => '176' , 'name' => 'Distrito do Porto'],
                [
                    'id' => '2906', 'country_id' => '176' , 'name' => 'Lisboa e Vale do Tejo'],
                [
                    'id' => '2907', 'country_id' => '176' , 'name' => 'Madeira'],
                [
                    'id' => '2908', 'country_id' => '176' , 'name' => 'Norte'],
                [
                    'id' => '2909', 'country_id' => '176' , 'name' => 'Paivas'],
                [
                    'id' => '3131', 'country_id' => '189' , 'name' => 'Acquaviva'],
                [
                    'id' => '3132', 'country_id' => '189' , 'name' => 'Borgo Maggiore'],
                [
                    'id' => '3133', 'country_id' => '189' , 'name' => 'Chiesanuova'],
                [
                    'id' => '3134', 'country_id' => '189' , 'name' => 'Domagnano'],
                [
                    'id' => '3135', 'country_id' => '189' , 'name' => 'Faetano'],
                [
                    'id' => '3136', 'country_id' => '189' , 'name' => 'Fiorentino'],
                [
                    'id' => '3137', 'country_id' => '189' , 'name' => 'Montegiardino'],
                [
                    'id' => '3138', 'country_id' => '189' , 'name' => 'San Marino'],
                [
                    'id' => '3139', 'country_id' => '189' , 'name' => 'Serravalle'],
                [
                    'id' => '3195', 'country_id' => '198' , 'name' => 'Benedikt'],
                [
                    'id' => '3196', 'country_id' => '198' , 'name' => 'Gorenjska'],
                [
                    'id' => '3197', 'country_id' => '198' , 'name' => 'Gorishka'],
                [
                    'id' => '3198', 'country_id' => '198' , 'name' => 'Jugovzhodna Slovenija'],
                [
                    'id' => '3199', 'country_id' => '198' , 'name' => 'Koroshka'],
                [
                    'id' => '3200', 'country_id' => '198' , 'name' => 'Notranjsko-krashka'],
                [
                    'id' => '3201', 'country_id' => '198' , 'name' => 'Obalno-krashka'],
                [
                    'id' => '3202', 'country_id' => '198' , 'name' => 'Obcina Domzale'],
                [
                    'id' => '3203', 'country_id' => '198' , 'name' => 'Obcina Vitanje'],
                [
                    'id' => '3204', 'country_id' => '198' , 'name' => 'Osrednjeslovenska'],
                [
                    'id' => '3205', 'country_id' => '198' , 'name' => 'Podravska'],
                [
                    'id' => '3206', 'country_id' => '198' , 'name' => 'Pomurska'],
                [
                    'id' => '3207', 'country_id' => '198' , 'name' => 'Savinjska'],
                [
                    'id' => '3208', 'country_id' => '198' , 'name' => 'Slovenian Littoral'],
                [
                    'id' => '3209', 'country_id' => '198' , 'name' => 'Spodnjeposavska'],
                [
                    'id' => '3210', 'country_id' => '198' , 'name' => 'Zasavska'],
                [
                    'id' => '3395', 'country_id' => '211' , 'name' => 'Alvsborgs Lan'],
                [
                    'id' => '3396', 'country_id' => '211' , 'name' => 'Angermanland'],
                [
                    'id' => '3397', 'country_id' => '211' , 'name' => 'Blekinge'],
                [
                    'id' => '3398', 'country_id' => '211' , 'name' => 'Bohuslan'],
                [
                    'id' => '3399', 'country_id' => '211' , 'name' => 'Dalarna'],
                [
                    'id' => '3400', 'country_id' => '211' , 'name' => 'Gavleborg'],
                [
                    'id' => '3401', 'country_id' => '211' , 'name' => 'Gaza'],
                [
                    'id' => '3402', 'country_id' => '211' , 'name' => 'Gotland'],
                [
                    'id' => '3403', 'country_id' => '211' , 'name' => 'Halland'],
                [
                    'id' => '3404', 'country_id' => '211' , 'name' => 'Jamtland'],
                [
                    'id' => '3405', 'country_id' => '211' , 'name' => 'Jonkoping'],
                [
                    'id' => '3406', 'country_id' => '211' , 'name' => 'Kalmar'],
                [
                    'id' => '3407', 'country_id' => '211' , 'name' => 'Kristianstads'],
                [
                    'id' => '3408', 'country_id' => '211' , 'name' => 'Kronoberg'],
                [
                    'id' => '3409', 'country_id' => '211' , 'name' => 'Norrbotten'],
                [
                    'id' => '3410', 'country_id' => '211' , 'name' => 'Orebro'],
                [
                    'id' => '3411', 'country_id' => '211' , 'name' => 'Ostergotland'],
                [
                    'id' => '3412', 'country_id' => '211' , 'name' => 'Saltsjo-Boo'],
                [
                    'id' => '3413', 'country_id' => '211' , 'name' => 'Skane'],
                [
                    'id' => '3414', 'country_id' => '211' , 'name' => 'Smaland'],
                [
                    'id' => '3415', 'country_id' => '211' , 'name' => 'Sodermanland'],
                [
                    'id' => '3416', 'country_id' => '211' , 'name' => 'Stockholm'],
                [
                    'id' => '3417', 'country_id' => '211' , 'name' => 'Uppsala'],
                [
                    'id' => '3418', 'country_id' => '211' , 'name' => 'Varmland'],
                [
                    'id' => '3419', 'country_id' => '211' , 'name' => 'Vasterbotten'],
                [
                    'id' => '3420', 'country_id' => '211' , 'name' => 'Vastergotland'],
                [
                    'id' => '3421', 'country_id' => '211' , 'name' => 'Vasternorrland'],
                [
                    'id' => '3422', 'country_id' => '211' , 'name' => 'Vastmanland'],
                [
                    'id' => '3423', 'country_id' => '211' , 'name' => 'Vastra Gotaland'],
                [
                    'id' => '3424', 'country_id' => '212' , 'name' => 'Aargau'],
                [
                    'id' => '3425', 'country_id' => '212' , 'name' => 'Appenzell Inner-Rhoden'],
                [
                    'id' => '3426', 'country_id' => '212' , 'name' => 'Appenzell-Ausser Rhoden'],
                [
                    'id' => '3427', 'country_id' => '212' , 'name' => 'Basel-Landschaft'],
                [
                    'id' => '3428', 'country_id' => '212' , 'name' => 'Basel-Stadt'],
                [
                    'id' => '3429', 'country_id' => '212' , 'name' => 'Bern'],
                [
                    'id' => '3430', 'country_id' => '212' , 'name' => 'Canton Ticino'],
                [
                    'id' => '3431', 'country_id' => '212' , 'name' => 'Fribourg'],
                [
                    'id' => '3432', 'country_id' => '212' , 'name' => 'Geneve'],
                [
                    'id' => '3433', 'country_id' => '212' , 'name' => 'Glarus'],
                [
                    'id' => '3434', 'country_id' => '212' , 'name' => 'Graubunden'],
                [
                    'id' => '3435', 'country_id' => '212' , 'name' => 'Heerbrugg'],
                [
                    'id' => '3436', 'country_id' => '212' , 'name' => 'Jura'],
                [
                    'id' => '3437', 'country_id' => '212' , 'name' => 'Kanton Aargau'],
                [
                    'id' => '3438', 'country_id' => '212' , 'name' => 'Luzern'],
                [
                    'id' => '3439', 'country_id' => '212' , 'name' => 'Morbio Inferiore'],
                [
                    'id' => '3440', 'country_id' => '212' , 'name' => 'Muhen'],
                [
                    'id' => '3441', 'country_id' => '212' , 'name' => 'Neuchatel'],
                [
                    'id' => '3442', 'country_id' => '212' , 'name' => 'Nidwalden'],
                [
                    'id' => '3443', 'country_id' => '212' , 'name' => 'Obwalden'],
                [
                    'id' => '3444', 'country_id' => '212' , 'name' => 'Sankt Gallen'],
                [
                    'id' => '3445', 'country_id' => '212' , 'name' => 'Schaffhausen'],
                [
                    'id' => '3446', 'country_id' => '212' , 'name' => 'Schwyz'],
                [
                    'id' => '3447', 'country_id' => '212' , 'name' => 'Solothurn'],
                [
                    'id' => '3448', 'country_id' => '212' , 'name' => 'Thurgau'],
                [
                    'id' => '3449', 'country_id' => '212' , 'name' => 'Ticino'],
                [
                    'id' => '3450', 'country_id' => '212' , 'name' => 'Uri'],
                [
                    'id' => '3451', 'country_id' => '212' , 'name' => 'Valais'],
                [
                    'id' => '3452', 'country_id' => '212' , 'name' => 'Vaud'],
                [
                    'id' => '3453', 'country_id' => '212' , 'name' => 'Vauffelin'],
                [
                    'id' => '3454', 'country_id' => '212' , 'name' => 'Zug'],
                [
                    'id' => '3455', 'country_id' => '212' , 'name' => 'Zurich'],
                [
                    'id' => '3471', 'country_id' => '214' , 'name' => 'Changhua County'],
                [
                    'id' => '3472', 'country_id' => '214' , 'name' => 'Chiayi County'],
                [
                    'id' => '3473', 'country_id' => '214' , 'name' => 'Chiayi City'],
                [
                    'id' => '3474', 'country_id' => '214' , 'name' => 'Taipei City'],
                [
                    'id' => '3475', 'country_id' => '214' , 'name' => 'Hsinchu County'],
                [
                    'id' => '3476', 'country_id' => '214' , 'name' => 'Hsinchu City'],
                [
                    'id' => '3477', 'country_id' => '214' , 'name' => 'Hualien County'],
                [
                    'id' => '3480', 'country_id' => '214' , 'name' => 'Kaohsiung City'],
                [
                    'id' => '3481', 'country_id' => '214' , 'name' => 'Keelung City'],
                [
                    'id' => '3482', 'country_id' => '214' , 'name' => 'Kinmen County'],
                [
                    'id' => '3483', 'country_id' => '214' , 'name' => 'Miaoli County'],
                [
                    'id' => '3484', 'country_id' => '214' , 'name' => 'Nantou County'],
                [
                    'id' => '3486', 'country_id' => '214' , 'name' => 'Penghu County'],
                [
                    'id' => '3487', 'country_id' => '214' , 'name' => 'Pingtung County'],
                [
                    'id' => '3488', 'country_id' => '214' , 'name' => 'Taichung City'],
                [
                    'id' => '3492', 'country_id' => '214' , 'name' => 'Tainan City'],
                [
                    'id' => '3493', 'country_id' => '214' , 'name' => 'New Taipei City'],
                [
                    'id' => '3495', 'country_id' => '214' , 'name' => 'Taitung County'],
                [
                    'id' => '3496', 'country_id' => '214' , 'name' => 'Taoyuan City'],
                [
                    'id' => '3497', 'country_id' => '214' , 'name' => 'Yilan County'],
                [
                    'id' => '3498', 'country_id' => '214' , 'name' => 'YunLin County'],
                [
                    'id' => '4121', 'country_id' => '214' , 'name' => 'Lienchiang County'],
                [
                    'id' => '3526', 'country_id' => '217' , 'name' => 'Amnat Charoen'],
                [
                    'id' => '3527', 'country_id' => '217' , 'name' => 'Ang Thong'],
                [
                    'id' => '3528', 'country_id' => '217' , 'name' => 'Bangkok'],
                [
                    'id' => '3529', 'country_id' => '217' , 'name' => 'Buri Ram'],
                [
                    'id' => '3530', 'country_id' => '217' , 'name' => 'Chachoengsao'],
                [
                    'id' => '3531', 'country_id' => '217' , 'name' => 'Chai Nat'],
                [
                    'id' => '3532', 'country_id' => '217' , 'name' => 'Chaiyaphum'],
                [
                    'id' => '3533', 'country_id' => '217' , 'name' => 'Changwat Chaiyaphum'],
                [
                    'id' => '3534', 'country_id' => '217' , 'name' => 'Chanthaburi'],
                [
                    'id' => '3535', 'country_id' => '217' , 'name' => 'Chiang Mai'],
                [
                    'id' => '3536', 'country_id' => '217' , 'name' => 'Chiang Rai'],
                [
                    'id' => '3537', 'country_id' => '217' , 'name' => 'Chon Buri'],
                [
                    'id' => '3538', 'country_id' => '217' , 'name' => 'Chumphon'],
                [
                    'id' => '3539', 'country_id' => '217' , 'name' => 'Kalasin'],
                [
                    'id' => '3540', 'country_id' => '217' , 'name' => 'Kamphaeng Phet'],
                [
                    'id' => '3541', 'country_id' => '217' , 'name' => 'Kanchanaburi'],
                [
                    'id' => '3542', 'country_id' => '217' , 'name' => 'Khon Kaen'],
                [
                    'id' => '3543', 'country_id' => '217' , 'name' => 'Krabi'],
                [
                    'id' => '3544', 'country_id' => '217' , 'name' => 'Krung Thep'],
                [
                    'id' => '3545', 'country_id' => '217' , 'name' => 'Lampang'],
                [
                    'id' => '3546', 'country_id' => '217' , 'name' => 'Lamphun'],
                [
                    'id' => '3547', 'country_id' => '217' , 'name' => 'Loei'],
                [
                    'id' => '3548', 'country_id' => '217' , 'name' => 'Lop Buri'],
                [
                    'id' => '3549', 'country_id' => '217' , 'name' => 'Mae Hong Son'],
                [
                    'id' => '3550', 'country_id' => '217' , 'name' => 'Maha Sarakham'],
                [
                    'id' => '3551', 'country_id' => '217' , 'name' => 'Mukdahan'],
                [
                    'id' => '3552', 'country_id' => '217' , 'name' => 'Nakhon Nayok'],
                [
                    'id' => '3553', 'country_id' => '217' , 'name' => 'Nakhon Pathom'],
                [
                    'id' => '3554', 'country_id' => '217' , 'name' => 'Nakhon Phanom'],
                [
                    'id' => '3555', 'country_id' => '217' , 'name' => 'Nakhon Ratchasima'],
                [
                    'id' => '3556', 'country_id' => '217' , 'name' => 'Nakhon Sawan'],
                [
                    'id' => '3557', 'country_id' => '217' , 'name' => 'Nakhon Si Thammarat'],
                [
                    'id' => '3558', 'country_id' => '217' , 'name' => 'Nan'],
                [
                    'id' => '3559', 'country_id' => '217' , 'name' => 'Narathiwat'],
                [
                    'id' => '3560', 'country_id' => '217' , 'name' => 'Nong Bua Lam Phu'],
                [
                    'id' => '3561', 'country_id' => '217' , 'name' => 'Nong Khai'],
                [
                    'id' => '3562', 'country_id' => '217' , 'name' => 'Nonthaburi'],
                [
                    'id' => '3563', 'country_id' => '217' , 'name' => 'Pathum Thani'],
                [
                    'id' => '3564', 'country_id' => '217' , 'name' => 'Pattani'],
                [
                    'id' => '3565', 'country_id' => '217' , 'name' => 'Phangnga'],
                [
                    'id' => '3566', 'country_id' => '217' , 'name' => 'Phatthalung'],
                [
                    'id' => '3567', 'country_id' => '217' , 'name' => 'Phayao'],
                [
                    'id' => '3568', 'country_id' => '217' , 'name' => 'Phetchabun'],
                [
                    'id' => '3569', 'country_id' => '217' , 'name' => 'Phetchaburi'],
                [
                    'id' => '3570', 'country_id' => '217' , 'name' => 'Phichit'],
                [
                    'id' => '3571', 'country_id' => '217' , 'name' => 'Phitsanulok'],
                [
                    'id' => '3572', 'country_id' => '217' , 'name' => 'Phra Nakhon Si Ayutthaya'],
                [
                    'id' => '3573', 'country_id' => '217' , 'name' => 'Phrae'],
                [
                    'id' => '3574', 'country_id' => '217' , 'name' => 'Phuket'],
                [
                    'id' => '3575', 'country_id' => '217' , 'name' => 'Prachin Buri'],
                [
                    'id' => '3576', 'country_id' => '217' , 'name' => 'Prachuap Khiri Khan'],
                [
                    'id' => '3577', 'country_id' => '217' , 'name' => 'Ranong'],
                [
                    'id' => '3578', 'country_id' => '217' , 'name' => 'Ratchaburi'],
                [
                    'id' => '3579', 'country_id' => '217' , 'name' => 'Rayong'],
                [
                    'id' => '3580', 'country_id' => '217' , 'name' => 'Roi Et'],
                [
                    'id' => '3581', 'country_id' => '217' , 'name' => 'Sa Kaeo'],
                [
                    'id' => '3582', 'country_id' => '217' , 'name' => 'Sakon Nakhon'],
                [
                    'id' => '3583', 'country_id' => '217' , 'name' => 'Samut Prakan'],
                [
                    'id' => '3584', 'country_id' => '217' , 'name' => 'Samut Sakhon'],
                [
                    'id' => '3585', 'country_id' => '217' , 'name' => 'Samut Songkhran'],
                [
                    'id' => '3586', 'country_id' => '217' , 'name' => 'Saraburi'],
                [
                    'id' => '3587', 'country_id' => '217' , 'name' => 'Satun'],
                [
                    'id' => '3588', 'country_id' => '217' , 'name' => 'Si Sa Ket'],
                [
                    'id' => '3589', 'country_id' => '217' , 'name' => 'Sing Buri'],
                [
                    'id' => '3590', 'country_id' => '217' , 'name' => 'Songkhla'],
                [
                    'id' => '3591', 'country_id' => '217' , 'name' => 'Sukhothai'],
                [
                    'id' => '3592', 'country_id' => '217' , 'name' => 'Suphan Buri'],
                [
                    'id' => '3593', 'country_id' => '217' , 'name' => 'Surat Thani'],
                [
                    'id' => '3594', 'country_id' => '217' , 'name' => 'Surin'],
                [
                    'id' => '3595', 'country_id' => '217' , 'name' => 'Tak'],
                [
                    'id' => '3596', 'country_id' => '217' , 'name' => 'Trang'],
                [
                    'id' => '3597', 'country_id' => '217' , 'name' => 'Trat'],
                [
                    'id' => '3598', 'country_id' => '217' , 'name' => 'Ubon Ratchathani'],
                [
                    'id' => '3599', 'country_id' => '217' , 'name' => 'Udon Thani'],
                [
                    'id' => '3600', 'country_id' => '217' , 'name' => 'Uthai Thani'],
                [
                    'id' => '3601', 'country_id' => '217' , 'name' => 'Uttaradit'],
                [
                    'id' => '3602', 'country_id' => '217' , 'name' => 'Yala'],
                [
                    'id' => '3603', 'country_id' => '217' , 'name' => 'Yasothon'],
                [
                    'id' => '3805', 'country_id' => '230' , 'name' => 'Aberdeen'],
                [
                    'id' => '3806', 'country_id' => '230' , 'name' => 'Aberdeenshire'],
                [
                    'id' => '3807', 'country_id' => '230' , 'name' => 'Argyll'],
                [
                    'id' => '3808', 'country_id' => '230' , 'name' => 'Armagh'],
                [
                    'id' => '3809', 'country_id' => '230' , 'name' => 'Bedfordshire'],
                [
                    'id' => '3810', 'country_id' => '230' , 'name' => 'Belfast'],
                [
                    'id' => '3811', 'country_id' => '230' , 'name' => 'Berkshire'],
                [
                    'id' => '3812', 'country_id' => '230' , 'name' => 'Birmingham'],
                [
                    'id' => '3813', 'country_id' => '230' , 'name' => 'Brechin'],
                [
                    'id' => '3814', 'country_id' => '230' , 'name' => 'Bridgnorth'],
                [
                    'id' => '3815', 'country_id' => '230' , 'name' => 'Bristol'],
                [
                    'id' => '3816', 'country_id' => '230' , 'name' => 'Buckinghamshire'],
                [
                    'id' => '3817', 'country_id' => '230' , 'name' => 'Cambridge'],
                [
                    'id' => '3818', 'country_id' => '230' , 'name' => 'Cambridgeshire'],
                [
                    'id' => '3819', 'country_id' => '230' , 'name' => 'Channel Islands'],
                [
                    'id' => '3820', 'country_id' => '230' , 'name' => 'Cheshire'],
                [
                    'id' => '3821', 'country_id' => '230' , 'name' => 'Cleveland'],
                [
                    'id' => '3822', 'country_id' => '230' , 'name' => 'Co Fermanagh'],
                [
                    'id' => '3823', 'country_id' => '230' , 'name' => 'Conwy'],
                [
                    'id' => '3824', 'country_id' => '230' , 'name' => 'Cornwall'],
                [
                    'id' => '3825', 'country_id' => '230' , 'name' => 'Coventry'],
                [
                    'id' => '3826', 'country_id' => '230' , 'name' => 'Craven Arms'],
                [
                    'id' => '3827', 'country_id' => '230' , 'name' => 'Cumbria'],
                [
                    'id' => '3828', 'country_id' => '230' , 'name' => 'Denbighshire'],
                [
                    'id' => '3829', 'country_id' => '230' , 'name' => 'Derby'],
                [
                    'id' => '3830', 'country_id' => '230' , 'name' => 'Derbyshire'],
                [
                    'id' => '3831', 'country_id' => '230' , 'name' => 'Devon'],
                [
                    'id' => '3832', 'country_id' => '230' , 'name' => 'Dial Code Dungannon'],
                [
                    'id' => '3833', 'country_id' => '230' , 'name' => 'Didcot'],
                [
                    'id' => '3834', 'country_id' => '230' , 'name' => 'Dorset'],
                [
                    'id' => '3835', 'country_id' => '230' , 'name' => 'Dunbartonshire'],
                [
                    'id' => '3836', 'country_id' => '230' , 'name' => 'Durham'],
                [
                    'id' => '3837', 'country_id' => '230' , 'name' => 'East Dunbartonshire'],
                [
                    'id' => '3838', 'country_id' => '230' , 'name' => 'East Lothian'],
                [
                    'id' => '3839', 'country_id' => '230' , 'name' => 'East Midlands'],
                [
                    'id' => '3840', 'country_id' => '230' , 'name' => 'East Sussex'],
                [
                    'id' => '3841', 'country_id' => '230' , 'name' => 'East Yorkshire'],
                [
                    'id' => '3842', 'country_id' => '230' , 'name' => 'England'],
                [
                    'id' => '3843', 'country_id' => '230' , 'name' => 'Essex'],
                [
                    'id' => '3844', 'country_id' => '230' , 'name' => 'Fermanagh'],
                [
                    'id' => '3845', 'country_id' => '230' , 'name' => 'Fife'],
                [
                    'id' => '3846', 'country_id' => '230' , 'name' => 'Flintshire'],
                [
                    'id' => '3847', 'country_id' => '230' , 'name' => 'Fulham'],
                [
                    'id' => '3848', 'country_id' => '230' , 'name' => 'Gainsborough'],
                [
                    'id' => '3849', 'country_id' => '230' , 'name' => 'Glocestershire'],
                [
                    'id' => '3850', 'country_id' => '230' , 'name' => 'Gwent'],
                [
                    'id' => '3851', 'country_id' => '230' , 'name' => 'Hampshire'],
                [
                    'id' => '3852', 'country_id' => '230' , 'name' => 'Hants'],
                [
                    'id' => '3853', 'country_id' => '230' , 'name' => 'Herefordshire'],
                [
                    'id' => '3854', 'country_id' => '230' , 'name' => 'Hertfordshire'],
                [
                    'id' => '3855', 'country_id' => '230' , 'name' => 'Ireland'],
                [
                    'id' => '3856', 'country_id' => '230' , 'name' => 'Isle Of Man'],
                [
                    'id' => '3857', 'country_id' => '230' , 'name' => 'Isle of Wight'],
                [
                    'id' => '3858', 'country_id' => '230' , 'name' => 'Kenford'],
                [
                    'id' => '3859', 'country_id' => '230' , 'name' => 'Kent'],
                [
                    'id' => '3860', 'country_id' => '230' , 'name' => 'Kilmarnock'],
                [
                    'id' => '3861', 'country_id' => '230' , 'name' => 'Lanarkshire'],
                [
                    'id' => '3862', 'country_id' => '230' , 'name' => 'Lancashire'],
                [
                    'id' => '3863', 'country_id' => '230' , 'name' => 'Leicestershire'],
                [
                    'id' => '3864', 'country_id' => '230' , 'name' => 'Lincolnshire'],
                [
                    'id' => '3865', 'country_id' => '230' , 'name' => 'Llanymynech'],
                [
                    'id' => '3866', 'country_id' => '230' , 'name' => 'London'],
                [
                    'id' => '3867', 'country_id' => '230' , 'name' => 'Ludlow'],
                [
                    'id' => '3868', 'country_id' => '230' , 'name' => 'Manchester'],
                [
                    'id' => '3869', 'country_id' => '230' , 'name' => 'Mayfair'],
                [
                    'id' => '3870', 'country_id' => '230' , 'name' => 'Merseyside'],
                [
                    'id' => '3871', 'country_id' => '230' , 'name' => 'Mid Glamorgan'],
                [
                    'id' => '3872', 'country_id' => '230' , 'name' => 'Middlesex'],
                [
                    'id' => '3873', 'country_id' => '230' , 'name' => 'Mildenhall'],
                [
                    'id' => '3874', 'country_id' => '230' , 'name' => 'Monmouthshire'],
                [
                    'id' => '3875', 'country_id' => '230' , 'name' => 'Newton Stewart'],
                [
                    'id' => '3876', 'country_id' => '230' , 'name' => 'Norfolk'],
                [
                    'id' => '3877', 'country_id' => '230' , 'name' => 'North Humberside'],
                [
                    'id' => '3878', 'country_id' => '230' , 'name' => 'North Yorkshire'],
                [
                    'id' => '3879', 'country_id' => '230' , 'name' => 'Northamptonshire'],
                [
                    'id' => '3880', 'country_id' => '230' , 'name' => 'Northants'],
                [
                    'id' => '3881', 'country_id' => '230' , 'name' => 'Northern Ireland'],
                [
                    'id' => '3882', 'country_id' => '230' , 'name' => 'Northumberland'],
                [
                    'id' => '3883', 'country_id' => '230' , 'name' => 'Nottinghamshire'],
                [
                    'id' => '3884', 'country_id' => '230' , 'name' => 'Oxford'],
                [
                    'id' => '3885', 'country_id' => '230' , 'name' => 'Powys'],
                [
                    'id' => '3886', 'country_id' => '230' , 'name' => 'Roos-shire'],
                [
                    'id' => '3887', 'country_id' => '230' , 'name' => 'Sussex'],
                [
                    'id' => '3888', 'country_id' => '230' , 'name' => 'Sark'],
                [
                    'id' => '3889', 'country_id' => '230' , 'name' => 'Scotland'],
                [
                    'id' => '3890', 'country_id' => '230' , 'name' => 'Scottish Borders'],
                [
                    'id' => '3891', 'country_id' => '230' , 'name' => 'Shropshire'],
                [
                    'id' => '3892', 'country_id' => '230' , 'name' => 'Somerset'],
                [
                    'id' => '3893', 'country_id' => '230' , 'name' => 'South Glamorgan'],
                [
                    'id' => '3894', 'country_id' => '230' , 'name' => 'South Wales'],
                [
                    'id' => '3895', 'country_id' => '230' , 'name' => 'South Yorkshire'],
                [
                    'id' => '3896', 'country_id' => '230' , 'name' => 'Southwell'],
                [
                    'id' => '3897', 'country_id' => '230' , 'name' => 'Staffordshire'],
                [
                    'id' => '3898', 'country_id' => '230' , 'name' => 'Strabane'],
                [
                    'id' => '3899', 'country_id' => '230' , 'name' => 'Suffolk'],
                [
                    'id' => '3900', 'country_id' => '230' , 'name' => 'Surrey'],
                [
                    'id' => '3901', 'country_id' => '230' , 'name' => 'Sussex'],
                [
                    'id' => '3902', 'country_id' => '230' , 'name' => 'Twickenham'],
                [
                    'id' => '3903', 'country_id' => '230' , 'name' => 'Tyne and Wear'],
                [
                    'id' => '3904', 'country_id' => '230' , 'name' => 'Tyrone'],
                [
                    'id' => '3905', 'country_id' => '230' , 'name' => 'Utah'],
                [
                    'id' => '3906', 'country_id' => '230' , 'name' => 'Wales'],
                [
                    'id' => '3907', 'country_id' => '230' , 'name' => 'Warwickshire'],
                [
                    'id' => '3908', 'country_id' => '230' , 'name' => 'West Lothian'],
                [
                    'id' => '3909', 'country_id' => '230' , 'name' => 'West Midlands'],
                [
                    'id' => '3910', 'country_id' => '230' , 'name' => 'West Sussex'],
                [
                    'id' => '3911', 'country_id' => '230' , 'name' => 'West Yorkshire'],
                [
                    'id' => '3912', 'country_id' => '230' , 'name' => 'Whissendine'],
                [
                    'id' => '3913', 'country_id' => '230' , 'name' => 'Wiltshire'],
                [
                    'id' => '3914', 'country_id' => '230' , 'name' => 'Wokingham'],
                [
                    'id' => '3915', 'country_id' => '230' , 'name' => 'Worcestershire'],
                [
                    'id' => '3916', 'country_id' => '230' , 'name' => 'Wrexham'],
                [
                    'id' => '3917', 'country_id' => '230' , 'name' => 'Wurttemberg'],
                [
                    'id' => '3918', 'country_id' => '230' , 'name' => 'Yorkshire'],
                [
                    'id' => '3919', 'country_id' => '231' , 'name' => 'Alabama'],
                [
                    'id' => '3920', 'country_id' => '231' , 'name' => 'Alaska'],
                [
                    'id' => '3921', 'country_id' => '231' , 'name' => 'Arizona'],
                [
                    'id' => '3922', 'country_id' => '231' , 'name' => 'Arkansas'],
                [
                    'id' => '3923', 'country_id' => '231' , 'name' => 'Byram'],
                [
                    'id' => '3924', 'country_id' => '231' , 'name' => 'California'],
                [
                    'id' => '3925', 'country_id' => '231' , 'name' => 'Cokato'],
                [
                    'id' => '3926', 'country_id' => '231' , 'name' => 'Colorado'],
                [
                    'id' => '3927', 'country_id' => '231' , 'name' => 'Connecticut'],
                [
                    'id' => '3928', 'country_id' => '231' , 'name' => 'Delaware'],
                [
                    'id' => '3929', 'country_id' => '231' , 'name' => 'District of Columbia'],
                [
                    'id' => '3930', 'country_id' => '231' , 'name' => 'Florida'],
                [
                    'id' => '3931', 'country_id' => '231' , 'name' => 'Georgia'],
                [
                    'id' => '3932', 'country_id' => '231' , 'name' => 'Hawaii'],
                [
                    'id' => '3933', 'country_id' => '231' , 'name' => 'Idaho'],
                [
                    'id' => '3934', 'country_id' => '231' , 'name' => 'Illinois'],
                [
                    'id' => '3935', 'country_id' => '231' , 'name' => 'Indiana'],
                [
                    'id' => '3936', 'country_id' => '231' , 'name' => 'Iowa'],
                [
                    'id' => '3937', 'country_id' => '231' , 'name' => 'Kansas'],
                [
                    'id' => '3938', 'country_id' => '231' , 'name' => 'Kentucky'],
                [
                    'id' => '3939', 'country_id' => '231' , 'name' => 'Louisiana'],
                [
                    'id' => '3940', 'country_id' => '231' , 'name' => 'Lowa'],
                [
                    'id' => '3941', 'country_id' => '231' , 'name' => 'Maine'],
                [
                    'id' => '3942', 'country_id' => '231' , 'name' => 'Maryland'],
                [
                    'id' => '3943', 'country_id' => '231' , 'name' => 'Massachusetts'],
                [
                    'id' => '3944', 'country_id' => '231' , 'name' => 'Medfield'],
                [
                    'id' => '3945', 'country_id' => '231' , 'name' => 'Michigan'],
                [
                    'id' => '3946', 'country_id' => '231' , 'name' => 'Minnesota'],
                [
                    'id' => '3947', 'country_id' => '231' , 'name' => 'Mississippi'],
                [
                    'id' => '3948', 'country_id' => '231' , 'name' => 'Missouri'],
                [
                    'id' => '3949', 'country_id' => '231' , 'name' => 'Montana'],
                [
                    'id' => '3950', 'country_id' => '231' , 'name' => 'Nebraska'],
                [
                    'id' => '3951', 'country_id' => '231' , 'name' => 'Nevada'],
                [
                    'id' => '3952', 'country_id' => '231' , 'name' => 'New Hampshire'],
                [
                    'id' => '3953', 'country_id' => '231' , 'name' => 'New Jersey'],
                [
                    'id' => '3954', 'country_id' => '231' , 'name' => 'New Jersy'],
                [
                    'id' => '3955', 'country_id' => '231' , 'name' => 'New Mexico'],
                [
                    'id' => '3956', 'country_id' => '231' , 'name' => 'New York'],
                [
                    'id' => '3957', 'country_id' => '231' , 'name' => 'North Carolina'],
                [
                    'id' => '3958', 'country_id' => '231' , 'name' => 'North Dakota'],
                [
                    'id' => '3959', 'country_id' => '231' , 'name' => 'Ohio'],
                [
                    'id' => '3960', 'country_id' => '231' , 'name' => 'Oklahoma'],
                [
                    'id' => '3961', 'country_id' => '231' , 'name' => 'Ontario'],
                [
                    'id' => '3962', 'country_id' => '231' , 'name' => 'Oregon'],
                [
                    'id' => '3963', 'country_id' => '231' , 'name' => 'Pennsylvania'],
                [
                    'id' => '3964', 'country_id' => '231' , 'name' => 'Ramey'],
                [
                    'id' => '3965', 'country_id' => '231' , 'name' => 'Rhode Island'],
                [
                    'id' => '3966', 'country_id' => '231' , 'name' => 'South Carolina'],
                [
                    'id' => '3967', 'country_id' => '231' , 'name' => 'South Dakota'],
                [
                    'id' => '3968', 'country_id' => '231' , 'name' => 'Sublimity'],
                [
                    'id' => '3969', 'country_id' => '231' , 'name' => 'Tennessee'],
                [
                    'id' => '3970', 'country_id' => '231' , 'name' => 'Texas'],
                [
                    'id' => '3971', 'country_id' => '231' , 'name' => 'Trimble'],
                [
                    'id' => '3972', 'country_id' => '231' , 'name' => 'Utah'],
                [
                    'id' => '3973', 'country_id' => '231' , 'name' => 'Vermont'],
                [
                    'id' => '3974', 'country_id' => '231' , 'name' => 'Virginia'],
                [
                    'id' => '3975', 'country_id' => '231' , 'name' => 'Washington'],
                [
                    'id' => '3976', 'country_id' => '231' , 'name' => 'West Virginia'],
                [
                    'id' => '3977', 'country_id' => '231' , 'name' => 'Wisconsin'],
                [
                    'id' => '3978', 'country_id' => '231' , 'name' => 'Wyoming']
]);
        }
    }
}
