@extends('layouts.appHalimEn')
@section('title', '')
@section('css')
<link rel="stylesheet" href="{{ asset('css/halim1.css')}}" data-n-g="" />
@endsection
@section('logo')
<a href="/">
    <img class="logo" src="{{ asset('img/logo/halim.png') }}" alt="logo" />
    <img class="logo_m" src="{{ asset('img/logo/logo.png') }}" alt="logo" />
</a>
@endsection
@section('script')
@endsection
@section('lang')
<div class="lang-item"><a href="{{ route('company') }}"
    style="text-decoration: none; color:black;">ID</a></div>
<div class="lang-item"><a href="{{ route('company_en') }}"
    style="text-decoration: none; color:black;">EN</a></div>
@endsection
@section('content')
<div class="content null">
    <div id="company_page">
        <div class="wrapper">
            <h1 class="head-title">Information About<br />Halim Sakti</h1>
            <div class="about">
                <div class="logo-company">
                    <img src="https://halim-sakti.vercel.app/assets/about/HS.png" alt="logo" class="item">
                    <img src="https://halim-sakti.vercel.app/assets/about/sp.png" alt="logo" class="item">
                    <img src="https://halim-sakti.vercel.app/assets/about/HSCM.png" alt="logo" class="item">
                </div>
                <p style="text-align:justify;">PT Halim Sakti Pratama is a subsidiary of Halim Sakti Group supplying specialty and industrial chemicals in Indonesia since 1972. Located in Western part of Jakarta, the capital city of Indonesia, this company was established in 1972 by late Mr Jusuf Halim under the name P.D Halim (Sole trading company) and in 1976 was reorganized and registered as a private limited company under the name PT Halim Sakti.</p>
                <p style="text-align:justify;">As the company's business and market activities grew, the 2nd trading office named PT Halim Sarana Cahaya Semesta was set up in Surabaya to serve the eastern part of Java Activities. This was followed by the 3rd trading office set up in Medan named PT Halim Sejahtera Cipta Mandiri to serve business activities in Northern Sumatra and the surrounding region.</p>
                <p style="text-align:justify;">Besides trading activities, Halim Sakti group have also embarked into manufacturing and established the first plant in Surabaya producing food ingredients such as cake emulsifiers, baking powder, jelly powder and Phosphate compound. Under the banner of renowned Japanese organization Mitsubishi Chemical Corporation, our product Ryoto Ester SP is also exported throughout Asia and Middle East.</p>
                <p style="text-align:justify;">The next manufacturing project is a joint venture with Korean and Japanese partners. Through this unique and rare partnership as some have commented, a Plastic compounding plant was established as the pioneer within the industry in Indonesia in 1989.</p>
                <p style="text-align:justify;">The factory produces Colour Masterbatch, Calcium Carbonate Masterbatch, ABS compound, TPR compound and other plastic compounds. The products are not only well known domestically but also exported to several countries including Japan and Asia.</p>
                <p style="text-align:justify;">Having a growing volume of import and export activities, we established a forwarding agent company that is responsible for smooth transportation and cargo clearance through priority channels from the port where only a limited number of organizations have this access.</p>
                <p style="text-align:justify;">In 1997, PT Halim Sakti was restructured and became the holding company of the group. PT Halim Sakti Pratama was formed to take over the business activities of PT Halim Sakti in Jakarta &amp; surrounding areas.</p>
                <p style="text-align:justify;">In an ever changing business environment, we see that customers and suppliers expectations are growing more diverse and complex. As a result, we as an organization also took steps of transformation by adopting the ISO 9001 Quality Management System with the purpose of creating efficiency, strong market presence and quality services.</p>
                <div class="raw-html-embed">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Vision</h1>
                            <p>To be an organization that is able to supply both industrial and specialty chemicals with excellent quality, timely delivery and competitive pricing.</p>
                        </div>
                        <div class="col-md-6">
                            <h1>Mission</h1>
                            <p>To be an organization that is recognized for good corporate governance through human resource development, places great importance in the quality of its products and is socially responsible to our stakeholders.</p>
                        </div>
                    </div>
                </div>
                <h2>History</h2>
                <figure class="image"><img src="https://res.cloudinary.com/dfqcv08gp/image/upload/v1624207012/HISTORY_6adcf978d8.jpg"></figure>
                <h2>&nbsp;</h2>
                <h2>Corporate Values</h2>
                <p style="text-align:justify;">The management is always careful that growth and expansion does not supersede responsibility and accountability. Halim Sakti business policy is focused on keeping long term relationships and commitments that are beneficial for customers, suppliers and trading partners. The group is committed and guided by its quality policy in all aspects, be it logistics, administration or other operations.</p>
            </div>
        </div>
        <div class="about-section2">
            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center"><img src="/assets/information-about-Halim-Sakti.jpg" alt="pics" class="img-fluid mb-3" /></div>
                    <div class="col-lg-6">
                        <div class="about-section2_item"><img src="https://res.cloudinary.com/dfqcv08gp/image/upload/v1623848994/icon1_36928dcdd1.png" alt="icon1" />
                            <p><b>Quality product</b> - Strict control of international packaging regulation, product description, proper & safe handling of dangerous goods is important. World known brand name is being upheld.</p>
                        </div>
                        <div class="about-section2_item"><img src="https://res.cloudinary.com/dfqcv08gp/image/upload/v1623848994/icon2_68d1ec3d19.png" alt="icon1" />
                            <p><b>Storage</b> - Modern warehouses with constant monitoring of room temperature, cleanliness and storage procedures are implemented for specialized or sensitive products.</p>
                        </div>
                        <div class="about-section2_item"><img src="https://res.cloudinary.com/dfqcv08gp/image/upload/v1623848994/icon3_eb97d9566e.png" alt="icon1" />
                            <p><b>Delivery Transport</b> - network that identifies customers’ delivery requirements and offers an accurate and consistent on-time delivery.</p>
                        </div>
                        <div class="about-section2_item"><img src="https://res.cloudinary.com/dfqcv08gp/image/upload/v1623848994/icon4_0c26d41a92.png" alt="icon1" />
                            <p><b>Human Resources</b> - They are companies’ most valuable assets.; Marketing, Accounting/Administration, Logistics & Operations, Technology & Information System</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
