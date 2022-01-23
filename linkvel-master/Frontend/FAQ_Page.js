

const accordionItemhHeader = document.querySelectorAll(".accordion-item-header");  // Hol dir alle "dokumente" mit dem namen/class = "accordion-item-header"



// Wenn man auf der Webseite auf den "accordionItemhHeader" also die Fläche drückt, dann wird hinter accordionItemhHeader noch ein active drangehangen
// und das verändert das Flugzeug (rechtsschauend) zu einem Flugzeugsymbol(nach unten schauend).
accordionItemhHeader.forEach(accordionItemhHeader =>
{
    accordionItemhHeader.addEventListener("click", event =>
    {

        //                                          Selecte die classe accordion-item-header mit einem active dahinter und pack das in die Variable. Also alle classen => accordion-item-header.active
        const currentlyActiveAccordionItemhHeader = document.querySelector(".accordion-item-header.active");

       /*
       Wenn ein AccordionItemhHeader ist, darf kein zweites offen sein. Also wenn ein zweites angeklickt wird, während noch ein AccordionItemhHeader offen ist,
       dann schließe das vorige AccordionItemhHeader mit " currentlyActiveAccordionItemhHeader.nextElementSibling.style.maxHeight = 0;"
        */
        if(currentlyActiveAccordionItemhHeader && currentlyActiveAccordionItemhHeader !== accordionItemhHeader)
        {
            currentlyActiveAccordionItemhHeader.classList.toggle("active");
            currentlyActiveAccordionItemhHeader.nextElementSibling.style.maxHeight = 0;
        }


        accordionItemhHeader.classList.toggle("active");

        const accordionItemhBody = accordionItemhHeader.nextElementSibling;

        // Hat die classe "accordionItemhHeader" ein active? Also so => accordionItemhHeader.active
        if(accordionItemhHeader.classList.contains("active"))
        {
            // Dann setzt die maximale Höhe vom "accordionItemhBody"
            // scrollHeight => returnt die ganze Höhe von einem Element
            accordionItemhBody.style.maxHeight = accordionItemhBody.scrollHeight + "px";
        }
        else
        {
            // Und wenn die classe "active" nicht vorhanden ist dann setzte die maximale Höhe auf 0, d.h. verstecke den Body wieder
            accordionItemhBody.style.maxHeight = 0;
        }
    })
})



// Navigation ----------------------------------------------------------------------------------------------------------

const toggleButton = document.getElementsByClassName("toggle-button")[0]
const listContainer = document.getElementsByClassName("list-container")[0]

toggleButton.addEventListener("click", () =>{
    listContainer.classList.toggle("active")
})
