/*
ATTENTION ADMINISTRATORS:

This is the print CSS for all skins. Any major changes to this page 
should be first proposed on the [[Wikipedia:Village pump (technical)]].  

Testing can be done on your own user /monobook.css. 
In [[Mozilla]] and [[Opera (web browser)|Opera]], you can also 
test style changes dynamically with the 
[http://www.squarefree.com/bookmarklets/webdevel.html test styles] 
bookmarklet from squarefree.com. It pops up a window for adding 
style rules, and updates the page as you type.

Always check with the 
[http://tinyurl.com/enwppc W3C CSS Validation Service]
before and after any changes.

See also: [[Wikipedia:Catalogue of CSS classes]].
*/

/* <source lang="css"> */

/* 
Do not print:
1: When in mainspace: Article message boxes,
   navboxes, sisterproject boxes, disambig links,
   and items marked as metadata.
2: Privacy, about, disclaimer, redirect and section edit links.
3: Items marked as noprint.
*/
.ns-0 .ambox, 
.ns-0 .navbox, 
.ns-0 .infobox.sisterproject, 
.ns-0 .dablink, 
.ns-0 .metadata, 
#privacy, #about, #disclaimer, #contentSub, .editlink, 
.noprint {
    display: none;
}

/* Add formatting to make sure that "external references" from templates 
   like [[Template:Ref]] do not get URL expansion, not even when printed.
   The anchor itself has class "external autonumber" and the url expansion
   is inserted when printing (see the common printing style sheet at 
   http://en.wikipedia.org/skins-1.5/common/commonPrint.css) using the
   ":after" pseudo-element of CSS. Also hide in <cite> elements.
*/
#content cite a.external.text:after,
.nourlexpansion a.external.text:after,
.nourlexpansion a.external.autonumber:after {
    display: none !important;
}

/* </source> */