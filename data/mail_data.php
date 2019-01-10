<?php

$mail_data = [
    "orderNo"=>"注文番号",
    "lastName"=>"注文者氏名（姓）",
    "firstName"=>"注文者氏名（名）",
    "lastNameKana"=>"注文者氏名カナ（姓）",
    "firstNameKana"=>"注文者氏名カナ（名）",
    "reservationFlag"=>null,
    "ordOrderDate"=>"20190101",
    "zipCd"=>"2140014",
    "kenName"=>"神奈川県",
    "city"=>"川崎市多摩区登戸",
    "houseNo"=>"1234",
    "building"=>"hogehoge301",
    "companyName"=>"注文者会社",
    "departmentName"=>"注文者部署",
    "mailadd"=>"注文者メールアドレス",
    "tel"=>"00000000000",
    "cellularphone"=>"00000000001",
    "fax"=>"00000000002",
    "genderName"=>"注文者性別",
    "birthday"=>"20190101",
    "free1Ttl"=>"注文者フリー項目タイトル１",
    "free1Field"=>"注文者フリー項目内容１",
    "free2Ttl"=>"注文者フリー項目タイトル２",
    "free2Field"=>"注文者フリー項目内容２",
    "free3Ttl"=>"注文者フリー項目タイトル３",
    "free3Field"=>"注文者フリー項目内容３",
    "senderName"=>"ご依頼主",
    "mmbLoginId"=>"会員ID",
    "mmbCountTotal"=>"累計購入回数",
    "pointUseFlag"=>null,
    "pointCount"=>"注文者獲得ポイント",
    "mmbDecidedPointRemain"=>"使用可能ポイント",
    
    "deliveryList"=>[
        [
            "storeName" => "EC自宅外受け取りの店舗名称",
            "storePostNo" => "EC自宅外受け取りの店舗郵便番号",
            "storeAdd" => "EC自宅外受け取りの店舗住所",
            "storeTel" => "EC自宅外受け取りの店舗電話番号",
            "storeDate" => "20180101",
            "storeLimit" => "20180109",
            "deliveryName" => "配送方法名",
            "deliveryTypeList" => [
                ["deliveryType"=>"配送便種1"],
                ["deliveryType"=>"配送便種2"]
            ],
            "dlvLastName" => "配送先氏名（姓）",
            "dlvFirstName" => "配送先氏名（名）",
            "dlvLastNameKana" => "配送先氏名カナ（姓）",
            "dlvFirstNameKana" => "配送先氏名カナ（名）",
            "dlvZipCd" => "1111111",
            "dlvKenName" => "東京都",
            "dlvCity" => "hogehoge氏",
            "dlvHouseNo" => "234",
            "dlvBuilding" => "building",
            "dlvCompanyName" => "配送先会社",
            "dlvDepartmentName" => "配送先部署",
            "dlvTel" => "配送先電話番号",
            "deliveryDate" => "20190909",
            "dlvOriginalTime" => "配送希望時間帯",
            "ordItemList" => [
                [
                    "itemCd"=>"注文商品コード",
                    "itemName"=>"注文商品名",
                    "variationName"=>"注文商品バリエーション",
                    "orderItemPrice"=>10000,
                    "itemQuantity"=>1,
                    "itemAttrPtrn"=>1,
                    "attrList"=>[
                        [
                            "attrName"=>"属性名",
                            "attrVal"=>"属性値"
                        ]
                    ]
                ]
            ],
            "wrappingList" => [
                [
                    "wrapName"=>"注文ラッピング名",
                    "wrapDetailName"=>"注文ラッピング選択肢",
                    "wrapPrice"=>2000
                ],
                [
                    "wrapName"=>"注文ラッピング名",
                    "wrapDetailName"=>"注文ラッピング選択肢",
                    "wrapPrice"=>2000
                ]
            ],
            "carriageUndecided" => 1,
            "carriage" => 0,
            "coolFee" => 0
        ],
        [
            "storeName" => "EC自宅外受け取りの店舗名称",
            "storePostNo" => "EC自宅外受け取りの店舗郵便番号",
            "storeAdd" => "EC自宅外受け取りの店舗住所",
            "storeTel" => "EC自宅外受け取りの店舗電話番号",
            "storeDate" => "20180101",
            "storeLimit" => "20180109",
            "deliveryName" => "配送方法名",
            "deliveryTypeList" => [
                ["deliveryType"=>"配送便種1"],
                ["deliveryType"=>"配送便種2"]
            ],
            "dlvLastName" => "配送先氏名（姓）",
            "dlvFirstName" => "配送先氏名（名）",
            "dlvLastNameKana" => "配送先氏名カナ（姓）",
            "dlvFirstNameKana" => "配送先氏名カナ（名）",
            "dlvZipCd" => "1111111",
            "dlvKenName" => "東京都",
            "dlvCity" => "hogehoge氏",
            "dlvHouseNo" => "234",
            "dlvBuilding" => "building",
            "dlvCompanyName" => "配送先会社",
            "dlvDepartmentName" => "配送先部署",
            "dlvTel" => "配送先電話番号",
            "deliveryDate" => "20190909",
            "dlvOriginalTime" => "配送希望時間帯",
            "ordItemList" => [
                [
                    "itemCd"=>"注文商品コード",
                    "itemName"=>"注文商品名",
                    "variationName"=>"注文商品バリエーション",
                    "orderItemPrice"=>10000,
                    "itemQuantity"=>1,
                    "itemAttrPtrn"=>1,
                    "attrList"=>[
                        [
                            "attrName"=>"属性名",
                            "attrVal"=>"属性値"
                        ]
                    ]
                ]
            ],
            "wrappingList" => [
                [
                    "wrapName"=>"注文ラッピング名",
                    "wrapDetailName"=>"注文ラッピング選択肢",
                    "wrapPrice"=>2000
                ],
                [
                    "wrapName"=>"注文ラッピング名",
                    "wrapDetailName"=>"注文ラッピング選択肢",
                    "wrapPrice"=>2000
                ]
            ],
            "carriageUndecided" => 1,
            "carriage" => 0,
            "coolFee" => 0
        ]
    ],
    "subtotal"=>4000,
    "sumWrappingAmount"=>4500,
    "amountControlTtl"=>"注文金額調整項目名",
    "controlAmount"=>100,
    "fee"=>100,
    "pointDiscount"=>1000,
    "couponCode"=>"クーポンコード",
    "couponVal"=>"クーポン内容",
    "couponDiscount"=>4000,
    "orderSum"=>10000,
    "payName"=>"お支払方法",
    "billingNo"=>"コンビニ払込票番号（セブンイレブン）",
    "billingUrl"=>"コンビニ払込票URL（セブンイレブン）",
    "companyCode"=>"コンビニ企業コード（ファミリーマート）",
    "orderNoF"=>"コンビニ注文番号（ファミリーマート）",
    "econNo"=>"コンビニ受付番号（セブンイレブン・ファミリーマート）",
    "receptionTel"=>"コンビニ電話番号（セブンイレブン・ファミリーマート）",
    "expireDate"=>"コンビニ支払期限",
    "cnvstrPayUrl"=>"コンビニ支払説明URL",
    "payDetail"=>"お支払方法説明",
    "inquiryList"=>[
        [
            "expireDate"=>"注文アンケート質問内容1",
            "cnvstrPayUrl"=>"注文アンケート回答1"
        ],
        [
            "expireDate"=>"注文アンケート質問内容2",
            "cnvstrPayUrl"=>"注文アンケート回答3"
        ]
    ]
];