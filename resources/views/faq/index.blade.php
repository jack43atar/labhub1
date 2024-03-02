@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/faq/faq.css') }}">
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .card {
        margin-top: 3%;
        border: 0px solid white;
        width: 100%;
        margin-bottom: 3%;
        border-radius: 20px;
    }

    .faq_list span.marker {
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        font-size: 15px;
        color: #700203;
        font-weight: 700;
    }

    li {
        color: #333;
    }

    p {
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        color: black;
        margin: 0 0 1.5em;
    }

    .justify {
        text-align: justify;
    }

    a {
        color: black;
    }


    dd p {
        font-size: 14px;
    }

    dt span .marker {
        color: #700203;
    }
</style>
@endsection
@section('content')
<div>
    <div class="second_menu">
        <ul class="pageLocation">
            <li><a href="#">Lab Reservation <img src="{{asset('images/Back.svg')}}"></a></li>
            <li><a href="#">FAQs</a></li>
        </ul>
        @include('partials.sign_in_log_out')
    </div>
    <div style="background-color: #700203; border: 0px solid white; width: 100%;">
        <div class="container" style="margin-top: 10px; margin-bottom: 10px; ">
            <div class="row justify-content-center ">
                <div class="col-md-12">
                    <div class="card" id="card">
                        <div class="card-header">
                            <div class="title text-center text-danger">
                                <h1>FAQs</h1>
                            </div>
                            <div class="card-body">
                                <dl class="faq_list">
                                    <dt>
                                        <span class="marker">Q: 1 </span>
                                        &nbsp;&nbsp;Which technical documents need to be submitted in support of typical certification process for a radio device?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">The technical document list for FCC/IC certification of intentional radiators include – label and label location drawings, schematics, operational description, block diagrams, Installation manual, user’s manual, tune-up procedure among others. Other administrative documents such as Confidentiality Letter, Agency Letter, may be needed depending on the applicable certification approach. For CE certification, other documents needed for CE certification process and post-certification document retention are discussed in the
                                            <a href="https://www.ero.dk/B8FF1CC0-8C6C-4C8C-9019-7EB21FCABBD6">Guide to the R&TTE Directive 1999/5/EC</a>,
                                            <a href="https://single-market-economy.ec.europa.eu/sectors/electrical/files/emcguide_may2007_en.pdf"> Guide to the EMC Directive 2004/108/EC</a> or the
                                            <a href="https://single-market-economy.ec.europa.eu/sectors/electrical/files/lvdgen_en.pdf"> Guide to the Low Voltage Directive 2006/95/EC</a>.
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 2 </span>
                                        &nbsp;&nbsp;My product needs to meet both product safety and electromagnetic compatibility (EMC) requirements, what is the best approach to assure the testing program success?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            Since product safety or EMC requirements may affect end product design, it’s best to address both concurrently to avoid costly rework after production. If product safety is a mandatory objective, it’s advisable to address this first, then attend to EMC requirements next. However, if EMC requirements are mandatory as is the case for many US radio frequency emitting products, they can be addressed first, before product safety. The intended market is also crucial – CE mark requirements cover both safety and EMC – making both a priority, unlike the US where FCC EMC requirements must be met, and safety requirements may or may not be mandatory depending on workplace use of the end product.
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 3 </span>
                                        &nbsp;&nbsp;Who is authorized to certify unlicensed and licensed intentional radio frequency emitting products in the US and Europe?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            In the US, a Telecommunication Certification Body <a href="https://fjallfoss.fcc.gov/tcb/index.html">(TCB)</a> is able to certify many such products including those that Telcron offers support for. However, certain products such as software defined radio, ultrawideband, Broadband over Powerline and others on the <a href="https://fjallfoss.fcc.gov/tcb/GetTCBExclusionList.html?date_entered=2008-02-15+16%3A07%3A29.52&document_id=1&description=tster&_row_status_=">TCB exclusion list</a> are required to be certified by the FCC. <br /><br /> In Europe, products considered <a href="https://www.ero.dk/rtte">Class 1 equipment</a> under the R&TTE directive may be CE mark approved without Notified Body involvement after assessment to applicable harmonized standards have been fulfilled. <a href="https://ec.europa.eu/not_found?fuseaction=directive.notifiedbody&dir_id=22&type_dir=NO%20CPD&pro_id=99999&prc_id=99999&ann_id=99999&prc_anx=99999">R&TTE Directive Notified Bodies</a> can provide guidance on other products that require Notified Body involvement on how their CE-mark compliance process should be handled.
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 4 </span>
                                        &nbsp;&nbsp;Where can I find listings of FCC equipment classes?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            The device category classifications are at this <a href="https://apps.fcc.gov/oetcf/eas/reports/EquipmentRulesList.cfm">link</a>.
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 5 </span>
                                        &nbsp;&nbsp;Where can administrative FCC marketing requirements be found?

                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            Part 2, SubPart I
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 6 </span>
                                        &nbsp;&nbsp;What FCC rules section applies to administrative requirements on importation of devices?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            Part 2, SubPart K
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 7 </span>
                                        &nbsp;&nbsp;What FCC rules contain administrative requirements pertaining to confidentiality?

                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            Part 0.457 and 0.459
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 8 </span>
                                        &nbsp;&nbsp;What FCC rules section/subsection cover equipment authorization procedures?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            Part 2 SubPart J
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 9 </span>
                                        &nbsp;&nbsp;What classification of devices does Telcron cover?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            In line with the FCC’s designation, the main classifications are license-exempt operation products, and licensed operation products. Products that Telcron offers support on fall in the scope of these two classifications. <br /><br />
                                            The rules applicable to license-exempt operation products include<br />
                                        <p>
                                            • Part 15: Radio frequency devices<br>
                                            • Part 18: Industrial, Scientific, and Medical Equipment<br>
                                            • Part 68: Telephone Terminal Equipment and those applicable to licensed operation devices include:<br>
                                            • Part 22: Public mobile services<br>
                                            • Part 24: Personal communication services<br>
                                            • Part 90: Private land mobile radio service<br>
                                            • Part 95: Personal radio service</p>
                                        </p>
                                        <p>The equivalent designations for certain license exempt and licensed operation products in Europe are Short Range Devices (SRDs) that frequency allocation and radio limits are defined for in <a href="http://www.ero.dk/29AEB2D9-26BB-486B-ABF4-42CAB4D936CC.W5Doc?frames=no&"> Rec 70-03</a> or other <a href="https://www.erodocdb.dk/doks/doccategoryECC.aspx?doccatid=2">ERO regulation</a>. Electrical equipment regulatory provisions with respect to EMC, LVD, or R&TTE directives continue to apply.</p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 10 </span>
                                        &nbsp;&nbsp;What does Telcron’s Compliance Management (CM) Program involve?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            The CM program involves keeping product compliance up to date after initial product certification. Telcron will rely on the manufacturer to be notified of product changes that may trigger a reevaluation to update their compliance status. However, manufacturers can elect to be notified by Telcron of the need for a compliance reassessment due to standard changes.
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 11 </span>
                                        &nbsp;&nbsp;Can I book time for custom product testing besides those outlined in the standard?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            Yes, be sure to notify a Telcron contact about such need prior to making a booking for coordination with the intended test lab.
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 12 </span>
                                        &nbsp;&nbsp;What labeling requirements apply to my RF emitting product?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            Labeling is one of the requirements for formal certification. For most information technology products, guides to the various EU directives in item 8 include the proper CE marking. In the US, equivalent labeling requirements may be found in <a href="http://ecfr.gpoaccess.gov/cgi/t/text/text-idx?c=ecfr&sid=494b9197e15149f782ab2e0e16617e01&rgn=div8&view=text&node=47:1.0.1.1.16.1.240.10&idno=47">15.19</a>, or <a href="http://ecfr.gpoaccess.gov/cgi/t/text/text-idx?c=ecfr&sid=494b9197e15149f782ab2e0e16617e01&rgn=div8&view=text&node=47:1.0.1.1.16.4.241.6&idno=47">15.311</a>.
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 13 </span>
                                        &nbsp;&nbsp;What product category does Telcron support?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            Telcron offers support to technology manufacturers on compliance testing steps at competent third-party test labs for information technology and radio equipment covering many home or non-home use electronics including tablets, PC peripherals, PCs, RFID systems, WiFi, ultrabooks/netbooks, and smartphones. These products may or may not intentionally transmit radio frequency energy.
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 14 </span>
                                        &nbsp;&nbsp;Is final product compliance testing and certification supported?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            Precompliance (or pre-certification) product testing is generally supported, final product compliance testing is also supported at the manufacturer’s request and commitment on time, cost, and risks (including product redesign) that may be involved. Product certification is processed at request and in coordination with a certifying agency. Our eSource services may be utilized as needed for certain product certification needs.
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 15 </span>
                                        &nbsp;&nbsp;How does a precompliance test differ from a final compliance test?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            Typically a pass or fail result may be acceptable during precompliance testing, and the deliverable is a short-form test data report. However, only a pass result is acceptable during final compliance testing since this result is used to compile a report that may be filed for regulatory certification. There is also a requirement to compile supporting product documentation (schematics, printed circuit board layout, parts list, operating description, etc) as part of the regulatory certification process.
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 16 </span>
                                        &nbsp;&nbsp;How much time does my precompliance testing project require?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            It could be as little as 1 work shift or as long as 1 work week. The test lab can estimate time needed prior to making a booking. Final compliance tests typically take longer to complete and the completion schedule is coordinated prior to the start of the project. Discuss with a Telcron contact about time estimates prior to project start.
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 17 </span>
                                        &nbsp;&nbsp;Which countries/regions are supported?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            Support for global market acceptance is Telcron’s goal. The US, Canada, European Union, and Australia are among countries/regions within geographical scope. Our ongoing relationship building with test labs will progressively grow this footprint.
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 18 </span>
                                        &nbsp;&nbsp;How are testing or project related documents shared and retained?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            We are evaluating project and document management systems at the present time, for example WorkZone for secure, convenient sharing and retention of documents between the manufacturer and the test lab, and/or other agencies. Other file sharing means including email or CD/DVD copies may be used at the present time.
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 19 </span>
                                        &nbsp;&nbsp;What equipment authorization procedure applies to my technology product in the US and Canada after final compliance testing?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            For unintentional radiators, the applicable procedure may be Verification, Declaration of Conformity, or Certification – details can be found in <a href="http://ecfr.gpoaccess.gov/cgi/t/text/text-idx?c=ecfr&sid=494b9197e15149f782ab2e0e16617e01&rgn=div8&view=text&node=47:1.0.1.1.16.2.240.1&idno=47">15.101</a>. Regarding intentional radiators (i.e. radio frequency emitting products), the applicable procedure is typically Certification and may be found in <a href="http://ecfr.gpoaccess.gov/cgi/t/text/text-idx?c=ecfr&sid=494b9197e15149f782ab2e0e16617e01&rgn=div8&view=text&node=47:1.0.1.1.16.3.240.1&idno=47">15.201</a>. And for Unlicensed Personal Communications Service Devices, the applicable procedure may be found in <a href="http://ecfr.gpoaccess.gov/cgi/t/text/text-idx?c=ecfr&sid=494b9197e15149f782ab2e0e16617e01&rgn=div8&view=text&node=47:1.0.1.1.16.4.241.3&idno=47">15.305</a>. <br><br>
                                            In Canada, labeling requirements for intentional radiators are in <a href="https://www.ic.gc.ca/eic/site/smt-gst.nsf/vwapj/rssgene.pdf/$FILE/rssgene.pdf">RSS Gen</a> and in <a href="https://ised-isde.canada.ca/site/spectrum-management-telecommunications/en/devices-and-equipment/interference-causing-equipment-standards-ices/ices-003-information-technology-equipment-including-digital-apparatus">ICES 003</a> for unintentional radiators. <br><br>Be aware that consultation with the FCC’s Office of Engineering Technology or Industry Canada may be needed for guidance on specific test procedures to apply.
                                        </p>
                                    </dd>
                                    <dt>
                                        <span class="marker">Q: 20 </span>
                                        &nbsp;&nbsp;What equipment authorization procedure applies to my product in the European Union after final compliance testing?
                                    </dt>
                                    <dd>
                                        <span class="marker">A. </span>
                                        <p class="justify">
                                            For similar devices as those in item 7, they may be found by reviewing the <a href="https://www.ero.dk/B8FF1CC0-8C6C-4C8C-9019-7EB21FCABBD6">Guide to the R&TTE Directive 1999/5/EC</a>, <a href="https://single-market-economy.ec.europa.eu/sectors/electrical/files/emcguide_may2007_en.pdf">Guide to the EMC Directive 2004/108/EC</a> or the <a href="https://single-market-economy.ec.europa.eu/sectors/electrical/files/lvdgen_en.pdf">Guide to the Low Voltage Directive 2006/95/EC</a>, with the R&TTE Directive applicable to Information Technology equipment with radio capabilities, and both EMC and Low Voltage Directive applicable to non-radio capable Information Technology equipment.
                                        </p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection