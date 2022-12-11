@extends('layouts.appHalim')
@section('title', 'Product')
@section('css')
@endsection
@section('script')
@endsection
@section('logo')
<a href="{{ route('homepage') }}">
    <img class="logo" src="{{ asset('img/logo/halim.png') }}" alt="logo" />
    <img class="logo_m" src="{{ asset('img/logo/logo.png') }}" alt="logo" />
</a>
@endsection
@section('lang')
<div class="lang-item"><a href="{{ route('wproduct') }}"
    style="text-decoration: none; color:black;">ID</a></div>
<div class="lang-item"><a href="{{ route('wproduct_en') }}"
    style="text-decoration: none; color:black;">EN</a></div>
@endsection
@section('content')
<div class="content null">
    <div id="products_page">
        <div id="prd-section2">
            <div class="wrapper">
                <h1 class="product-head">Produk Lainnya</h1>
            </div>
            <div class="product-list">
                @foreach($product as $p)
                <div class="product-item">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ asset('image/product/'. $p->image) }}" style="width: 100%;">
                            </div>
                            <div class="col-md-7">
                                <div class="product-item_right">
                                    <div style="width:100%">
                                        <h2 class="product-title">{{ $p->product_nama }}</h2>
                                        <div class="product-excerpt">{{ $p->description_sub }}</div>
                                    </div><a class="rm-button" href="{{route('productdetail', $p->product_slug ) }}">Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        <div id="prd-section1">
            <div class="wrapper products-map"><img src="{{ asset('assets/maps-fix-01.jpg')}}" alt="map" /></div>
            <div class="wrapper">
                <div class="wrapper">
                    <div class="column-list">
                        <div class="column-item">
                            <div class="country-item">
                                <div class="head">
                                    <h2>Australia</h2><img data-testid="circle-country-flag" title="au" height="100" src="https://hatscripts.github.io/circle-flags/flags/au.svg">
                                </div>
                                <ul>
                                    <li>Tronox Pigment Bunbury Ltd.</li>
                                    <li>Kerry Ingredients</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>Austria</h2><img data-testid="circle-country-flag" title="at" height="100" src="https://hatscripts.github.io/circle-flags/flags/at.svg">
                                </div>
                                <ul>
                                    <li>Akdeniz Chemson Additives AG</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>Belgium</h2><img data-testid="circle-country-flag" title="be" height="100" src="https://hatscripts.github.io/circle-flags/flags/be.svg">
                                </div>
                                <ul>
                                    <li>SCR Sibelco N.V.</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>China</h2><img data-testid="circle-country-flag" title="cn" height="100" src="https://hatscripts.github.io/circle-flags/flags/cn.svg">
                                </div>
                                <ul>
                                    <li>Angel Yeast Co., Ltd.</li>
                                    <li>Anhui Black Cat Material Science Co., Ltd.</li>
                                    <li>Anhui Goldstar Titanium Dioxide (Group) Co., Ltd.</li>
                                    <li>Anhui Jinhe Industrial Co., Ltd.</li>
                                    <li>Black Diamond Material Science Co., Ltd.</li>
                                    <li>CSPC Weisheng Pharmaceutical (Shijiazhuang) Co., Ltd.</li>
                                    <li>CZNA (Changzhou North American Pigment)</li>
                                    <li>DSM Rainbow (Inner Mongolia) Biotechnology Co., Ltd.</li>
                                    <li>Fano Group Limited</li>
                                    <li>Fujian Zhongde Energy Co., Ltd.</li>
                                    <li>Hebei Huayang Biological Technology Co., Ltd.</li>
                                    <li>Hubei Hongxin Chemical (China)</li>
                                    <li>Hubei Konson Konjac Gum Co., Ltd.</li>
                                    <li>Inner Mongolia Ihjuchem Industrial Co., Ltd</li>
                                    <li>Isky Chemicals Co., Ltd.</li>
                                    <li>Jiangsu Kolod Food Ingredients Co., Ltd.</li>
                                    <li>Jining Haocen Limited</li>
                                    <li>Kunming Chuan Jin Nuo Chemical Co., Ltd.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="column-item">
                            <div class="country-item">
                                <ul>
                                    <li>L&amp;P Food Ingredients Co., Ltd.</li>
                                    <li>Lianyungang Shuren Kechuang Food Additive Co., Ltd.</li>
                                    <li>Ningbo Yonghua Resin Co., Ltd</li>
                                    <li>Pingxiang Golden Fertilizer Agri-Tech Co., Ltd.</li>
                                    <li>RZBC (Juxian) Co., Ltd.</li>
                                    <li>Shaanxi Guanjie Technology Co., Ltd.</li>
                                    <li>Shandong FY Feed Technology Co., Ltd.</li>
                                    <li>Shandong Jinhai Titanium Resources Technology Co., Ltd.</li>
                                    <li>Shandong Kunda Biotechnology Co., Ltd.</li>
                                    <li>Shandong Lantian Disinfection Technology Co., Ltd</li>
                                    <li>Shijiazhuang Aquaenjoy Enviroment Corporation Limited</li>
                                    <li>Star Grace Mining Co., Ltd</li>
                                    <li>Toda United Industrial (Zhejiang) Co., Ltd.</li>
                                    <li>TTCA Co., Ltd.</li>
                                    <li>Vitasweet Co., Ltd.</li>
                                    <li>Weifang Ensign Industry Co., Ltd.</li>
                                    <li>Weifang Honghai Plastics Technology Co., Ltd.</li>
                                    <li>Wuhan Sanjiang Space Good Biotech Co., Ltd.</li>
                                    <li>Xing Hua International Co., Ltd.</li>
                                    <li>Zhejiang Wanglin Bio-Tech Co., Ltd.</li>
                                    <li>Zhejiang Jiaao Enprotech Stock Co., Ltd.</li>
                                    <li>Zhejiang Jiasui Import &amp; Export Co., Ltd.</li>
                                    <li>Zhejiang Top Hydrocolloids Co., Ltd</li>
                                    <li>Zhuceng Dongxiao Biotechnology Co., Ltd</li>
                                    <li>Zhuceng Taisheng Chemical Co., Ltd.</li>
                                    <li>Zhejiang Wanglin Bio-Tech Co., Ltd</li>
                                </ul>
                            </div>
                        </div>
                        <div class="column-item">
                            <div class="country-item">
                                <div class="head">
                                    <h2>Colombia</h2><img data-testid="circle-country-flag" title="co" height="100" src="https://hatscripts.github.io/circle-flags/flags/co.svg">
                                </div>
                                <ul>
                                    <li>Sucroal SA</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>Canada</h2><img data-testid="circle-country-flag" title="ca" height="100" src="https://hatscripts.github.io/circle-flags/flags/ca.svg">
                                </div>
                                <ul>
                                    <li>Macco Organiques Inc.</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>Europe</h2><img data-testid="circle-country-flag" title="european_union" height="100" src="https://hatscripts.github.io/circle-flags/flags/european_union.svg">
                                </div>
                                <ul>
                                    <li>Sibelco</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>Finland</h2><img data-testid="circle-country-flag" title="fi" height="100" src="https://hatscripts.github.io/circle-flags/flags/fi.svg">
                                </div>
                                <ul>
                                    <li>Nouryon Chemicals Finland OY</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>France</h2><img data-testid="circle-country-flag" title="fr" height="100" src="https://hatscripts.github.io/circle-flags/flags/fr.svg">
                                </div>
                                <ul>
                                    <li>Fermentis</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>Hong Kong</h2><img data-testid="circle-country-flag" title="hk" height="100" src="https://hatscripts.github.io/circle-flags/flags/hk.svg">
                                </div>
                                <ul>
                                    <li>Angel Yeast (Hong Kong) Co., Ltd.</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>India</h2><img data-testid="circle-country-flag" title="in" height="100" src="https://hatscripts.github.io/circle-flags/flags/in.svg">
                                </div>
                                <ul>
                                    <li>Ajanta Chemical Industries</li>
                                    <li>Bridge Chem</li>
                                    <li>G Amphray Laboratories</li>
                                    <li>Hindalco Industries Limited</li>
                                    <li>Manmohan Minerals &amp; Chemicals PVT., Ltd.</li>
                                    <li>R.R. Minerals Exports PVT., Ltd.</li>
                                    <li>Vishal Laboratories</li>
                                    <li>Lucid Colloids Limited</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>Indonesia</h2><img data-testid="circle-country-flag" title="id" height="100" src="https://hatscripts.github.io/circle-flags/flags/id.svg">
                                </div>
                                <ul>
                                    <li>Indonesia Chemical Alumina</li>
                                    <li>Cargill Cocoa and Chocolate</li>
                                </ul>
                            </div>
                        </div>
                        <div class="column-item">
                            <div class="country-item">
                                <div class="head">
                                    <h2>Japan</h2><img data-testid="circle-country-flag" title="jp" height="100" src="https://hatscripts.github.io/circle-flags/flags/jp.svg">
                                </div>
                                <ul>
                                    <li>Fuji Nihon Seito Corporation</li>
                                    <li>Kimica Corporation</li>
                                    <li>Mitsubishi Chemical Foods Corporation</li>
                                    <li>Mitsubishi Corporation RTM Japan</li>
                                    <li>Morita Kagayu Kogyo Co., Ltd</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>Korea</h2><img data-testid="circle-country-flag" title="kr" height="100" src="https://hatscripts.github.io/circle-flags/flags/kr.svg">
                                </div>
                                <ul>
                                    <li>LG Chemical Ltd.</li>
                                    <li>Lotte Chemical Corporation</li>
                                    <li>Junyoung Corporation</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>Malaysia</h2><img data-testid="circle-country-flag" title="my" height="100" src="https://hatscripts.github.io/circle-flags/flags/my.svg">
                                </div>
                                <ul>
                                    <li>Minetech Asphalt Man Internasional Sdn. Bhd.</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>Netherland</h2><img data-testid="circle-country-flag" title="nl" height="100" src="https://hatscripts.github.io/circle-flags/flags/nl.svg">
                                </div>
                                <ul>
                                    <li>Cristal International B.V.</li>
                                    <li>Emerald Kalama Chemical B.V.</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>Singapore</h2><img data-testid="circle-country-flag" title="sg" height="100" src="https://hatscripts.github.io/circle-flags/flags/sg.svg">
                                </div>
                                <ul>
                                    <li>Faci Asia Pasific Pte., Ltd.</li>
                                    <li>San-Ei Gen F.F.I. (Asia) Pte., Ltd.</li>
                                    <li>Star Grace Chemical Pte., Ltd.</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>Spain</h2><img data-testid="circle-country-flag" title="es" height="100" src="https://hatscripts.github.io/circle-flags/flags/es.svg">
                                </div>
                                <ul>
                                    <li>Compania Espanola De Algas Marinas S.A</li>
                                </ul>
                            </div>
                            <div class="country-item">
                                <div class="head">
                                    <h2>Swedia</h2><img data-testid="circle-country-flag" title="se" height="100" src="https://hatscripts.github.io/circle-flags/flags/se.svg">
                                </div>
                                <ul>
                                    <li>Tetra Chemicals Europe AB</li>
                                </ul>
                            </div>
                        </div>
                        <div class="column-item">
                            <div class="country-item">
                                <div class="head">
                                    <h2>Taiwan</h2><img data-testid="circle-country-flag" title="tw" height="100" src="https://hatscripts.github.io/circle-flags/flags/tw.svg">
                                </div>
                                <ul>
                                    <li>Chi Mei Corporation</li>
                                    <li>Focus Pigment Corp.</li>
                                    <li>LCY GRIT Corp.</li>
                                    <li>Lih Hsiang Industrial Corporation</li>
                                    <li>McBrie Applied Material Corp.</li>
                                    <li>Micro-Tech Foods Ingredients, Inc.</li>
                                    <li>New Particle Chemical Colors Corporation</li>
                                    <li>Power Chemical Corp.</li>
                                    <li>Yuncheng Chemical Industrial Co., Ltd.</li>
                                    <li>Chang Chun Petrochemical Co., Ltd</li>
                                </ul>
                            </div>
                            <div class="column-item">
                                <div class="country-item">
                                    <div class="head">
                                        <h2>Thailand</h2><img data-testid="circle-country-flag" title="th" height="100" src="https://hatscripts.github.io/circle-flags/flags/th.svg">
                                    </div>
                                    <ul>
                                        <li>Aditya Birla Chemicals (Thailand) Ltd. (Sulphites &amp; Phosphates Division)</li>
                                        <li>F.A. International Co., Ltd.</li>
                                        <li>Ohara Chemicals (Thailand) Co., Ltd.</li>
                                        <li>SCG Perfomance Chemicals, Co., Ltd.</li>
                                        <li>Thai Peroxide Co., Ltd.</li>
                                    </ul>
                                </div>
                                <div class="country-item">
                                    <div class="head">
                                        <h2>United Kingdom</h2><img data-testid="circle-country-flag" title="gb" height="100" src="https://hatscripts.github.io/circle-flags/flags/gb.svg">
                                    </div>
                                    <ul>
                                        <li>Valtris Specialty Chemicals Ltd.</li>
                                    </ul>
                                </div>
                                <div class="country-item">
                                    <div class="head">
                                        <h2>United State of America</h2><img data-testid="circle-country-flag" title="us" height="100" src="https://hatscripts.github.io/circle-flags/flags/us.svg">
                                    </div>
                                    <ul>
                                        <li>Exandal Corporation</li>
                                        <li>Grain Processing Corp.</li>
                                        <li>Neogen Corporation</li>
                                    </ul>
                                </div>
                                <div class="country-item">
                                    <div class="head">
                                        <h2>Vietnam</h2><img data-testid="circle-country-flag" title="vn" height="100" src="https://hatscripts.github.io/circle-flags/flags/vn.svg">
                                    </div>
                                    <ul>
                                        <li>LG Vina Chemical Company Ltd.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
