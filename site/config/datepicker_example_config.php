<?php

/*

---------------------------------------
EXAMPLE DATEPICKER CONFIG

DOCUMENTATION: https://github.com/Andi-Lo/kirby-datepicker#options
---------------------------------------

*/


/* 
 * European Format: 'd-m-Y'
 * American Format: 'm/d/Y'
 * Fancy Format: 		'l, F j,Y' e.g.: Friday, August 12, 2016
 * See list of all available date formats: https://github.com/Andi-Lo/kirby-datepicker#date-format-characters
*/
c::set('dp_dateFormat', 'd-m-Y');

/*
 * Set a custom datepicker styling by copying one of the themes locatet in "assets/css/themes"
 * to your "assets/css/datepicker" 
*/

c::set("panel.stylesheet", "assets/css/datepicker/yourThemeFile.css");

/*
 * Example default: Settings
 * Feel free to delete unused 
 * Full documentation of options: https://github.com/Andi-Lo/kirby-datepicker#options
*/
c::set('dp_enableTime', false);
c::set('dp_noCalendar', false);
c::set('dp_altFormat', 'F j, Y');
c::set('dp_altInput', false);
c::set('dp_altInputClass', '');
c::set('dp_allowInput', false);
c::set('dp_clickOpens',  true);
c::set('dp_defaultDate', '');
c::set('dp_enableSeconds', false);
c::set('dp_hourIncrement', 1);
c::set('dp_minuteIncrement',  5);
c::set('dp_maxDate',  null);
c::set('dp_minDate', null);
c::set('dp_shorthandCurrentMonth', false);
c::set('dp_weekNumbers', false);
c::set('dp_time_24hr',  false);
