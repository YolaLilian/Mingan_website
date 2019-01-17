const treatmentSelect = "<select name=\"treatment\">\n" +
    "    <option>Reiki behandeling</option>\n" +
    "    <option>Reiki en rugmassage</option>\n" +
    "    <option>Reiki en ontspanningsmassage</option>\n" +
    "    <option>Chakrabehandeling</option>\n" +
    "    <option>Chakrabehandeling en massage</option>\n" +
    "    <option>Massage rug</option>\n" +
    "    <option>Massage rug en benen</option>\n" +
    "    <option>Ontspanningsmassage</option>\n" +
    "    <option>Energetisch huis reinigen</option>\n" +
    "    <option>Duobehandeling ontspanningsmassage</option>\n" +
    "    <option>Duobehandeling reiki en rugmassage</option>\n" +
    "    <option>Duobehandeling reiki en ontspanningsmassage</option>\n" +
    "    <option>Duobehandeling chakrabehandeling en massage</option>\n" +
    "</select>";

const intakeSelect = "<select name=\"treatment\">" +
    "    <option>Intakegesprek</option>\n" +
    "</select>";

const treatmentSelectElement = $("#treatmentselect");

$("#newclient").append(treatmentSelect);

$("#newclient").change(function() {
    if (this.value === "Ja" ) {
        treatmentSelectElement.empty();
        treatmentSelectElement.append(intakeSelect);
    }
    else {
        treatmentSelectElement.empty();
        treatmentSelectElement.append(treatmentSelect);

    }
});