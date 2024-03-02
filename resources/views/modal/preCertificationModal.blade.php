<!-- Precertification Test Modal Start -->
<div class="modal fade" id="preCertificationModal" tabindex="-1" role="dialog" aria- labelledby="preCertificationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-red" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="preCertificationModalLabel">Pre-Certification Testing</h5>
                <button type="button" class="close" data-dismiss="modal" aria- label="Close">
                    <span aria-hidden="true" style="color: white;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('preCertificationtesting')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <p>For the most recent project completed at this testing facility <input type="date" name="date" id="date"> I would rate my satisfaction as follows:</p><br>
                    <label for="projectObjective"><b>Our project objectives for product evaluation were met</b></label><br>
                    <select name="projectObjective" id="projectObjective" style="width:100%">
                        <option value="" selected disabled>Select Option</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select><br><br>
                    <label for="opprtunities"><b>If the opportunity arises, will use this facility again</b></label><br>
                    <select name="opprtunities" id="opprtunities" style="width:100%">
                        <option value="" selected disabled>Select Option</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select><br><br>
                    <label for="completedOnTime"><b>Project was completed on time</b></label><br>
                    <select name="completedOnTime" id="completedOnTime" style="width:100%">
                        <option value="" selected disabled>Select Option</option>
                        <option value="1">Completely Agree</option>
                        <option value="2">Partially Agree</option>
                        <option value="3">Neutral</option>
                        <option value="4">Partially Disagree</option>
                        <option value="5">Completely Disagree</option>
                    </select><br><br>
                    <label for="completedOnBudget"><b>Project was completed on budget:</b></label><br>
                    <select name="completedOnBudget" id="completedOnBudget" style="width:100%">
                        <option value="" selected disabled>Select Option</option>
                        <option value="1">Completely Agree</option>
                        <option value="2">Partially Agree</option>
                        <option value="3">Neutral</option>
                        <option value="4">Partially Disagree</option>
                        <option value="5">Completely Disagree</option>
                    </select><br><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Precertification Test Modal End -->