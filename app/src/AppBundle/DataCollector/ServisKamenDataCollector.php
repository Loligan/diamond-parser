<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 21.02.18
 * Time: 10:13
 */

namespace AppBundle\DataCollector;


use AppBundle\Entity\Item;
use AppBundle\Entity\Page;
use AppBundle\Entity\Queue;
use AppBundle\Items\ItemsType\AgshkItem;
use AppBundle\Items\ItemsType\KanatyItem;
use AppBundle\Items\ItemsType\KoronkiItem;
use AppBundle\Items\ItemsType\KrugiShlifovalnyeItem;

class ServisKamenDataCollector extends DataCollector
{
    CONST DOMAIN = 'servis-kamen.ru';
    CONST SUPPLIER_NAME = 'ООО «Торговая Компания «Сервис Камня»';
    CONST SUPPLIER_TYPE = 'Поставщик';
    CONST SUPPLIER_COUNTRY = 'Россия';
    CONST SUPPLIER_CITY = 'Москва';
    CONST SUPPLIER_ADDRESS = 'ул. Днепропетровский проезд, д.1';
    CONST SUPPLIER_PHONES = '+7 (499) 551-77-52 +7 (495) 655-20-68 (69, 70, 71, 72)';
    CONST SUPPLIER_EMAILS = 'info@sk-group.pro';
    CONST COUNTRY_BRAND = [
        "Белоруссия",
        "Болгария",
        "Германия",
        "Испания",
        "Италия",
        "Китай",
        "Корея",
        "Польша",
        "Россия",
        "Румыния",
        "Украина",
        "Япония"
    ];
    CONST SUPPLIER_LOGO = 'https://www.servis-kamen.ru/custom/my/img/logo.png';
    CONST SUPPLIER_ABOUT = 'Компания была основана в 2000 году с целью обеспечения покупателей доступным оборудованием, качественными инструментами и химическими средствами для обработки камня. Для этого фирма создала прямые связи с лучшими российскими и зарубежными производителями.
Для снижения стоимости реализуемой продукции компания постоянно совершенствует свою систему управления и планирования, а также улучшает уровень взаимодействия с поставщиками.
Особое внимание уделяется качеству обслуживания покупателей. В этом нам помогают корректность персонала, высокий уровень понимания потребностей клиентов и индивидуальный подход. Минимизировать потери времени покупателя и сделать взаимодействие с компанией более комфортным помогает хорошо отлаженный алгоритм работы. Эффективность работы повышает предоставление сопутствующих услуг, таких как техническое консультирование и оперативная доставка.
Наличие представительств в большинстве крупных городов России (Москва, Новосибирск, Краснодар, Екатеринбург, Самара и т. д.) дает возможность оперативно поставлять качественное и недорогое оборудование, инструменты и химические средства для обработки камня во все регионы страны.
Общество с ограниченной ответственностью «Торговая Компания «Сервис Камня»
ИНН 7724925677
КПП 772401001
ОГРН 1147746707921
ОКПО 17764316
ОКАТО 45296553000
Юридический адрес: 117545 Днепропетровский проезд, д.1
Фактический адрес: 117545 Днепропетровский проезд, д.1';


    const CRUMBS_CATEGORY = [
        'Алмазные гибкие диски (для работы с водой)' => 'Алмазные гибкие шлифовальные круги',
        'Алмазные гибкие диски (для работы без воды)' => 'Алмазные гибкие шлифовальные круги',
        'Основы для шлифовально-полировальных дисков' => 'Алмазные шлифовальные круги',
        'Профильные фрезы' => 'Алмазные профильные фрезы',
        'Фрезы алмазные торцевые китайского производства' => 'Алмазные профильные фрезы',
        'Фрезы алмазные торцевые украинского производства' => 'Алмазные профильные фрезы',
        'Фрезы алмазные' => 'Алмазные профильные фрезы',
        'Алмазные коронки' => 'Алмазные коронки, Свёрла',
        'Алмазные напильники' => 'Алмазные напильники',
        'Алмазный канат' => 'Алмазные канаты',
        'Отрезные диски для сухой резки камня' => 'NO',
        'Алмазный шлифовально полировальный инструмент Российского производства ' => 'NO',
        'Алмазный шлифовально полировальный инструмент Белорусского производства' => 'NO',
        'Алмазные шлифовальные диски на полимерной основе Украинского производства' => 'NO',
        'Алмазный шлифовально полировальный инструмент Украинского производства' => 'NO',
        'Шлифовально-полировальные диски Китайского производства' => 'NO',
        'Фрезы алмазные торцевые корейского производства (EHWA)' => 'NO',
        'Гранитные отрезные диски для станков' => 'NO',
        'Мраморные отрезные диски для станков' => 'NO',
        'Корпуса и сегменты отрезных дисков (с водным охлаждением' => 'NO',
        'Фигурные ролики для накатки профиля' => 'NO',
        'Фрезы алмазные торцевые (ФАТ) для шлифовки камня' => 'NO',
        'Алмазные ручные терки KGS' => 'NO',
        'Алмазная бумага "Б"' => 'NO',
        'Алмазные ручные терки ORDG' => 'NO',
        'Алмазная бумага ОRDG' => 'NO',
        'Алмазные напильники ORDG' => 'NO',
        'Полировальный порошок' => 'NO',
    ];

    private $status = 'OK';
    public function updateData(Page $page, array $data)
    {
        print 'PAGE ID: ' . $page->getId() . PHP_EOL;
        $item = $this->getDoctrine()->getRepository('AppBundle:Item');
        $item = $item->findOneBy(['page' => $page]);
        if (is_null($item)) {
            $item = new Item();
            $item->setPage($page);

        }
        print 'ITEM ID: '.$item->getId().PHP_EOL;
        $item->setStatusParse(Item::STATUS_PARSE_OK);
        $item->setCollectorInfo(null);
        $item->setDataInfo(null);

        $categoryInfo = $this->getCatalogCategory($data["crumbs"]);
        $catalogCategory = $categoryInfo['category'];
        $item->setCategory($categoryInfo['category']);
        $item->setDataInfo(json_encode($data));
        if(
            count($data['crumbs'])==0 ||
            $data['title']==null ||
            $data['brand']==null
        ){
            $this->status = Item::STATUS_PARSE_NOT_BASE_ELEMENT;
        }


        $item->setCategorySite($categoryInfo['category_site']);
        if ($catalogCategory=='NO') {
            $this->status = Item::STATUS_PARSE_NOT_CATEGORY;
        }

        switch ($catalogCategory) {
            case 'Алмазные гибкие шлифовальные круги':
                $item->setCollectorInfo(json_encode($this->collectorAgshk($data, $page)));
                break;
            case 'Алмазные коронки, Свёрла':
                $item->setCollectorInfo(json_encode($this->collectorKoronki($data, $page)));
                break;
            case 'Алмазные канаты':
                $item->setCollectorInfo(json_encode($this->collectorKanati($data, $page)));
                break;
            case 'Алмазные шлифовальные круги':
                $item->setCollectorInfo(json_encode($this->collecotrKrugiShlifovalnye($data, $page)));
                break;
            default:
                print '== Такой категории нет для обработки данных ==' . PHP_EOL;
        }
        $item->setStatusParse($this->status);
        $this->getDoctrine()->getManager()->merge($item);
        $this->getDoctrine()->getManager()->flush();
    }


    private function getCatalogCategory($breadcrumbs)
    {
        if (count($breadcrumbs) < 1) {
            return null;
        }
        foreach ($breadcrumbs as $breadcrumb) {
            if (key_exists(trim($breadcrumb), self::CRUMBS_CATEGORY)) {
                return
                    [
                        'category'=>self::CRUMBS_CATEGORY[$breadcrumb],
                        'category_site'=>$breadcrumb
                    ];
            }
        }
        return null;
    }

    private function collectorAgshk($data, Page $page)
    {
        $handleName = $this->handleAgshkAdditionalInfo($data);

        $nameItem = $data['title'];
        $diameter = $data['characteristics']['Диаметр'];
        $grit_agshk = null;
        if (key_exists('Номер', $data['characteristics'])) {
            $grit_agshk = $data['characteristics']['Номер'];
        }
        $brand = null;
        $coutry_brand = null;
        $work_mode = null;
        if ($data['characteristics']['Тип работы'] == 'с водой') {
            $work_mode = 'мокрый';
        } elseif ($data['characteristics']['Тип работы'] == 'без воды') {
            $work_mode = 'сухой';
        }

        $images = null;
        $price = $handleName['price'];
        $type_number = null;
        $brand = $handleName['brand'];
        $coutry_brand = $handleName['country_brand'];

        foreach ($data['images'] as $img) {
            $images .= $img . ';';
        }
        if (preg_match('/№[0-9]{1,3}/', $data['title'], $result)) {
            $type_number = $result[0];
        };
        $material = null;
        $nameItem = trim(str_replace('Алмазный гибкий диск', '', $nameItem));
        if (in_array('Алмазные гибкие диски для полировки камня', $data['crumbs'])) {
            $material = 'камень';
        }

        $item = new AgshkItem(self::DOMAIN, $nameItem, $diameter, $price, $page->getLinkPage(), 'date_add');
        $item->setGritAgshk($grit_agshk);
        $item->setBrand($brand);
        $item->setWorkMode($work_mode);
        $item->setImgUrls($images);
        $item->setTypeNumber($type_number);
        $item->setBrandCountry($coutry_brand);
        $item->setMaterial($material);
        $ca = $item->compileToArray();
        var_dump($ca);
        return $ca;
    }

    private function collectorKoronki($data, Page $page)
    {
        $handleInfo = $this->handleKoronkiInfo($data);
        $images = $handleInfo['images'];
        $work_mode = null;
        $item = new KoronkiItem(
            self::DOMAIN,
            $handleInfo['name_item'],
            'edge_type',
            $data['characteristics']['Диаметр'],
            $data['characteristics']['Тип крепления'],
            'камень',
            $handleInfo['price'],
            $page->getLinkPage(),
            'date_add'
        );

        if ($data['characteristics']['Тип работы'] == 'с водой') {
            $work_mode = 'мокрый';
        } elseif ($data['characteristics']['Тип работы'] == 'без воды') {
            $work_mode = 'сухой';
        }
        $item->setWorkMode($work_mode);
        $item->setImgUrls($images);
        $ca = $item->compileToArray();
        return $ca;
    }

    private function collectorKanati($data, Page $page)
    {

        $handleInfo = $this->handleKanatiInfo($data);
        $images = $handleInfo['images'];
        $work_mode = null;
        $item = new KanatyItem(
            self::DOMAIN,
            $handleInfo['name_item'],
            $handleInfo['price'],
            $page->getLinkPage(),
            date('Y-m-d')
        );

        $item->setMaterial('камень');
        $item->setImgUrls($images);
        $item->setBrandCountry($handleInfo['country_brand']);
        $item->setBrand($handleInfo['brand']);
        $ca = $item->compileToArray();
        return $ca;
    }

    private function collecotrKrugiShlifovalnye($data, Page $page){
        $handleInfo = $this->handleKrugiShlifovalnyeInfo($data);
        $images = $handleInfo['images'];
        $work_mode = null;
        $item = new KrugiShlifovalnyeItem(
            self::DOMAIN,
            $handleInfo['name_item'],
            'profile',
            $data['characteristics']['Диаметр'],
            'bore',
            'камень',
            $handleInfo['price'],
            $page->getLinkPage(),
            date('Y-m-d')
        );

        $item->setMaterial('камень');
        $item->setImgUrls($images);
        $item->setBrandCountry($handleInfo['country_brand']);
        $item->setBrand($handleInfo['brand']);
        $ca = $item->compileToArray();
        return $ca;
    }

    private function handleKrugiShlifovalnyeInfo($data)
    {
        $handleData = [
            'name_item'=>$data['title'],
            'images' => null,
            'price' => null,
            'country_brand'=>null,
            'brand'=>null,
        ];

        $handleData['price'] = str_replace(' ', '', $data['price']);
        foreach ($data['images'] as $img) {
            $handleData['images'] .= $img . ';';
        }

        if (in_array($data['brand'], self::COUNTRY_BRAND)) {
            $handleData['country_brand'] = $data['brand'];
            $handleData['brand'] = $data['brand'];
        } else {
            if (preg_match('~\((.*)\)~', $data['brand'], $result)) {
                $handleData['country_brand'] = $result[1];
                $handleData['brand'] = trim(preg_replace('~\(.*\)~', '', $data['brand']));

            }
        }
        $handleData['price'] = str_replace(' ', '', $data['price']);
        return $handleData;
    }

    private function handleKanatiInfo($data)
    {
        $handleData = [
            'name_item'=>$data['title'],
            'images' => null,
            'price' => null,
            'country_brand'=>null,
            'brand'=>null,
        ];

        $handleData['price'] = str_replace(' ', '', $data['price']);
        foreach ($data['images'] as $img) {
            $handleData['images'] .= $img . ';';
        }

        if (in_array($data['brand'], self::COUNTRY_BRAND)) {
            $handleData['country_brand'] = $data['brand'];
            $handleData['brand'] = $data['brand'];
        } else {
            if (preg_match('~\((.*)\)~', $data['brand'], $result)) {
                $handleData['country_brand'] = $result[1];
                $handleData['brand'] = trim(preg_replace('~\(.*\)~', '', $data['brand']));

            }
        }
        $handleData['price'] = str_replace(' ', '', $data['price']);
        return $handleData;
    }

    private function handleKoronkiInfo($data)
    {
        $handleData = [
            'name_item' => null,
            'images' => null,
            'price' => null
        ];
        foreach ($data['crumbs'] as $crumb) {
            if (preg_match('~Алмазные коронки..*$~', $crumb)) {
                $handleData['name_item'] = trim(str_replace('Алмазные коронки', '', $crumb));
            }
        }

        $handleData['price'] = str_replace(' ', '', $data['price']);
        foreach ($data['images'] as $img) {
            $handleData['images'] .= $img . ';';
        }
        $handleData['price'] = str_replace(' ', '', $data['price']);
        return $handleData;
    }

    private function handleAgshkAdditionalInfo($data)
    {
        $handleData = [
            'country_brand' => null,
            'brand' => null,
            'price' => null
        ];

        if (in_array($data['brand'], self::COUNTRY_BRAND)) {
            $handleData['country_brand'] = $data['brand'];
            $handleData['brand'] = $data['brand'];
        } else {
            if (preg_match('~\((.*)\)~', $data['brand'], $result)) {
                $handleData['country_brand'] = $result[1];
                $handleData['brand'] = trim(preg_replace('~\(.*\)~', '', $data['brand']));
            }
        }
        $handleData['price'] = str_replace(' ', '', $data['price']);
        return $handleData;
    }

}