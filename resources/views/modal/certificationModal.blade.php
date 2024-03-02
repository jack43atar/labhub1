<!-- Certification testing Modal Start -->
<div class="modal fade" id="certificationModal" tabindex="-1" role="dialog" aria-labelledby="certificationModal" aria-hidden="true">
    <div class="modal-dialog modal-md modal-red" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="certificationModal">Certification Testing</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('certificationTesting')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col">
                        <label for="usually">1. Usually, my company</label>
                        <select name="usually" id="usually" style="width: 100%;">
                            <option value="" selected disabled>Select option</option>
                            <option value="1">Engage with only one testing lab for process compliance and certification steps</option>
                            <option value="2">Engage with multiple test labs to complete product compliance adn/or certification steps</option>
                            <option value="3">Utilizes testing labs regardless of location</option>
                            <option value="4">Only utilize locally situated testing that can allow test program to be witnessed</option>
                            <option value="5">Undertake pre-certificatiob evaluation at a third party lab to determine readiness for final certification tests</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="activities" style="text-align: justify;">2. Areas that my company would like to see improvements in our current activities/programs on product testing and certification incllude:</label>
                        <select name="activities" id="activities" style="width: 100%;">
                            <option value="" selected disabled>Select option</option>
                            <option value="1">Keeping up with changing regulations</option>
                            <option value="2">Managing relationship with testing labs</option>
                            <option value="3">Turnaround time</option>
                            <option value="4">Test Reports, document retention and handling</option>
                            <option value="5">Knowledge of regulatory compliance steps</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="countries" style="text-align: justify;">3.Countries or regions that our end electronics products are manufactured and/or assembled in include:</label>
                        <select name="countries" id="countries" style="width: 100%;">
                            <option value="" selected disabled>Select option</option>
                            <option value="1">North America</option>
                            <option value="2">Europe </option>
                            <option value="3">China/Taiwan</option>
                            <option value="4">Japan</option>
                            <option value="5">South America</option>
                            <option value="6">Asia(Other)</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="weOffer" style="text-align: justify;">4.We offer our electronics products for sale in:</label>
                        <select name="weOffer" id="weOffer" style="width: 100%;">
                            <option value="" selected disabled>Select option</option>
                            <option value="1">North America</option>
                            <option value="2">Europe</option>
                            <option value="3">China/Taiwan</option>
                            <option value="4">Japan</option>
                            <option value="5">Asia(Other)</option>
                            <option value="6">South America</option>
                            <option value="7">Middle East</option>
                            <option value="8">Africa</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="ourHome" style="text-align: justify;">5. Our hone and none-home use electronics belongs in one and more of these categories:</label>
                        <select name="ourHome" id="ourHome" style="width: 100%;">
                            <option value="" selected disabled>Select option</option>
                            <option value="1">Wireless/Wireless devices</option>
                            <option value="2">Audio</option>
                            <option value="3">Computer Hardware</option>
                            <option value="4">Consumer - lifestyle Electronics</option>
                            <option value="5">Other information and communications Technology Equipment</option>
                            <option value="6">Induatrial, Scientific, or Medical equipment</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="manufacturer" style="text-align: justify;">6. My company tasks a third party manufacturer to complete necessary product testibg and/or certifications steps:</label>
                        <select name="manufacturer" id="manufacturer" style="width: 100%;">
                            <option value="" selected disabled>Select option</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="electronicProduct" style="text-align: justify;">7. Electronic product compliance certification of interest at my company include:</label>
                        <select name="electronicProduct" id="electronicProduct" style="width: 100%;">
                            <option value="" selected disabled>Select option</option>
                            <option value="1">FCC</option>
                            <option value="2">Industry Canada</option>
                            <option value="3">VCCI</option>
                            <option value="4">CE-Mark</option>
                            <option value="5">CCC</option>
                            <option value="6">MIC</option>
                            <option value="7">C-Tick</option>
                            <option value="8">PSE</option>
                            <option value="9">NOM</option>
                            <option value="10">CB Scheme</option>
                            <option value="11">NRTL marks(UL/cUL, ETL/cETL, MET, TUV) </option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="productTesting" style="text-align: justify;">8. For product testing and certification projects that may involve use of third party testing labs, the most important selection criteria is/are:</label>
                        <select name="productTesting" id="productTesting" style="width: 100%;">
                            <option value="" selected disabled>Select option</option>
                            <option value="1">Price</option>
                            <option value="2">Availability</option>
                            <option value="3">Lab Competency/reputation</option>
                            <option value="4">Time to completion</option>
                            <option value="5">Familiarity with lab or testing agency</option>
                            <option value="6">Credibility</option>
                            <option value="7">Location</option>
                            <option value="8">Combination of two or more of above</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="thirdPartyTesting" style="text-align: justify;">9. We engage third party testing labs in product compliance or certification related activities or projects ________ times a year?</label>
                        <select name="thirdPartyTesting" id="thirdPartyTesting" style="width: 100%;">
                            <option value="" selected disabled>Select option</option>
                            <option value="1">0-3</option>
                            <option value="2">4-7</option>
                            <option value="3">8-15</option>
                            <option value="4">20-40</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="productCompliance" style="text-align: justify;">10. The Product compliance domains my company is most concerned about with regard to product development and marketing is/are:</label>
                        <select name="productCompliance" id="productCompliance" style="width: 100%;">
                            <option value="" selected disabled>Select option</option>
                            <option value="1">Electromagnetic compatibility/immunity</option>
                            <option value="2">Electromagnetic compatibility/emissions</option>
                            <option value="3">Product safety</option>
                            <option value="4">Wireless/radio</option>
                            <option value="5">Environment</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Certification testing Modal End -->