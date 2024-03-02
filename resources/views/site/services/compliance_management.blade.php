@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection
@section('content')
    <section class="business">
        <div class="second_menu">
            <ul class="pageLocation">
                <li><a href="#">Services <img src="{{asset('images/Back.svg')}}">  </a>
                </li>
                <li><a href="{{route('services.compliance_management')}}">Compliance management</a>
                </li>
            </ul>
            @include('partials.sign_in_log_out')
        </div>
        <div class="esource">
            <div class="esource_left">
                <h2>Compliance Management</h2>
                <p>Product related changes such as an obsolete part replacement, a
                    firmware/software or hardware upgrade, or changes to the
                    regulating test standard may trigger a reevaluation of the original
                    compliance assessment hence the need for a compliance
                    management program to handle the range of eventualities.</p>

                <p> Compliance steps are known to vary by the standard/regulating
                    authority and the standard enacting process itself differs by
                    market/geography. For example, standards issued by the
                    European Telecommunications Standards Institute (ETSI) tend to
                    change often, and manufacturers need to keep up to date on the
                    latest standard requirements that apply for CE-marking of their
                    product. ETSI’s standards making process is different from that of
                    the American National Standards Institute (ANSI) that issues a
                    number of US based standard procedures the Federal
                    Communications Commission (FCC) reckons with for product
                    electromagnetic compatibility compliance. Telcron understands
                    these subtleties that inform the need for a compliance strategy in
                    alignment with market specific regulatory requirements.</p>
            </div>
            <div class="esource_right">
                <div class="map">
                    <img src="{{asset('images/compliance.svg')}}">
                </div>
            </div>
        </div>
        <div class="technology">
            <div class="management">
                <p>Technology manufacturers seeking ongoing compliance to regulatory requirements during<br/>
                    each product’s lifecycle have to assess their products to requirements that include the following:</p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td> FCC Part 15</td>
                            <td> CISPR 11</td>
                            <td> EN 61000-3-2</td>
                            <td> EN 300 330-1</td>
                            <td>EN 301 489-1</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>   RSS 210</td>
                            <td> CISPR 22</td>
                            <td> EN 61000-3-3</td>
                            <td>EN 300 330-2</td>
                            <td> EN 301 489-3</td>
                        </tr>
                        <tr>
                            <td> FCC Part 18</td>
                            <td>  RSS 123</td>
                            <td> EN 50360</td>
                            <td>EN 300 220-1</td>
                            <td> EN 301 489-7</td>
                        </tr>
                        <tr>
                            <td> FCC OET 65</td>
                            <td>  RSS Gen</td>
                            <td> EN 50361</td>
                            <td> EN 300 220-2</td>
                            <td>EN 301 489-17</td>
                        </tr>
                        <tr>
                            <td>  FCC Par 2</td>
                            <td> RSS 310</td>
                            <td>EN 50364</td>
                            <td>EN 300 440-1</td>
                            <td>EN 301 908-1</td>
                        </tr>
                        <tr>
                            <td>  FCC Part 90</td>
                            <td> RSS –</td>
                            <td> EN 50371</td>
                            <td> EN 300 440-2</td>
                            <td> EN 301 908.2</td>
                        </tr>
                        <tr>
                            <td> FCC Part 95</td>
                            <td> ICES 003</td>
                            <td> EN 60950-1</td>
                            <td> EN 301 511</td>
                            <td> EN 301 893</td>
                        </tr>
                        <tr>
                            <td> FCC Part 22</td>
                            <td> ANSI C63.4</td>
                            <td>IEEE C95.1</td>
                            <td> EN 302 208-1</td>
                            <td> EN 300 328-1</td>
                        </tr>
                        <tr>
                            <td> FCC Part 24</td>
                            <td>ANSI C63.10</td>
                            <td> EN 55024</td>
                            <td> EN 302 208-2</td>
                            <td> EN 300 328-2</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <p>and other harmonized R&TTE Directive standards , harmonized Low Voltage Directive standards , and harmonized EMC Directive
                    standards as applicable; non-harmonized standards may apply in other cases that may require expert determination. Products are ass
                    essed to these standards in order to meet CE mark, FCC, IC, C-Tick, and other mandatory or market preferred certifications in the
                    European Union, US, Canada, and Australia. In the European Union, i nformation technology and radio equipment within our scope are
                    regulated under the EMC Directive , R&TTE Directive , and the Low Voltage Directive . Other Ecodesign regulations that may apply include
                    Regulation No. 1275 of 2008 and Regulation No. 278 of 2009 .</p>

                <p> Besides regulations issued by agencies such as the FCC, Industry Canada , and the CEPT, major hubs to obtain standard/regulatory
                    requirements include: IHS Global ,BSI Group,IEC Webstore,TechStreet,Document Center,ANSI Webstore,Comm-2000, ETSI .</p>

                <p>Techstreet also offers a Standard Tracker tool to track updates to any number of standards per user. A listing of standards that may be
                    accessed by qualifying customers from Telcron’s library are here</p>
            </div>
        </div>
    </section>
@endsection