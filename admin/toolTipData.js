var FiltersEnabled = 0; // if your not going to use transitions or filters in any of the tips set this to 0
var spacer="&nbsp; &nbsp; &nbsp; ";

// email notifications to admin
notifyAdminNewMembers0Tip=["", spacer+"No email notifications to admin."];
notifyAdminNewMembers1Tip=["", spacer+"Notify admin only when a new member is waiting for approval."];
notifyAdminNewMembers2Tip=["", spacer+"Notify admin for all new sign-ups."];

// visitorSignup
visitorSignup0Tip=["", spacer+"If this option is selected, visitors will not be able to join this group unless the admin manually moves them to this group from the admin area."];
visitorSignup1Tip=["", spacer+"If this option is selected, visitors can join this group but will not be able to sign in unless the admin approves them from the admin area."];
visitorSignup2Tip=["", spacer+"If this option is selected, visitors can join this group and will be able to sign in instantly with no need for admin approval."];

// incoming_deceased table
incoming_deceased_addTip=["",spacer+"This option allows all members of the group to add records to the 'Incoming deceased' table. A member who adds a record to the table becomes the 'owner' of that record."];

incoming_deceased_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Incoming deceased' table."];
incoming_deceased_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Incoming deceased' table."];
incoming_deceased_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Incoming deceased' table."];
incoming_deceased_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Incoming deceased' table."];

incoming_deceased_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Incoming deceased' table."];
incoming_deceased_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Incoming deceased' table."];
incoming_deceased_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Incoming deceased' table."];
incoming_deceased_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Incoming deceased' table, regardless of their owner."];

incoming_deceased_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Incoming deceased' table."];
incoming_deceased_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Incoming deceased' table."];
incoming_deceased_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Incoming deceased' table."];
incoming_deceased_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Incoming deceased' table."];

// outgoing_deceased table
outgoing_deceased_addTip=["",spacer+"This option allows all members of the group to add records to the 'Outgoing deceased' table. A member who adds a record to the table becomes the 'owner' of that record."];

outgoing_deceased_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Outgoing deceased' table."];
outgoing_deceased_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Outgoing deceased' table."];
outgoing_deceased_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Outgoing deceased' table."];
outgoing_deceased_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Outgoing deceased' table."];

outgoing_deceased_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Outgoing deceased' table."];
outgoing_deceased_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Outgoing deceased' table."];
outgoing_deceased_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Outgoing deceased' table."];
outgoing_deceased_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Outgoing deceased' table, regardless of their owner."];

outgoing_deceased_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Outgoing deceased' table."];
outgoing_deceased_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Outgoing deceased' table."];
outgoing_deceased_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Outgoing deceased' table."];
outgoing_deceased_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Outgoing deceased' table."];

// relatives_info table
relatives_info_addTip=["",spacer+"This option allows all members of the group to add records to the 'Relatives info' table. A member who adds a record to the table becomes the 'owner' of that record."];

relatives_info_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Relatives info' table."];
relatives_info_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Relatives info' table."];
relatives_info_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Relatives info' table."];
relatives_info_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Relatives info' table."];

relatives_info_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Relatives info' table."];
relatives_info_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Relatives info' table."];
relatives_info_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Relatives info' table."];
relatives_info_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Relatives info' table, regardless of their owner."];

relatives_info_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Relatives info' table."];
relatives_info_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Relatives info' table."];
relatives_info_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Relatives info' table."];
relatives_info_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Relatives info' table."];

// rooms table
rooms_addTip=["",spacer+"This option allows all members of the group to add records to the 'Rooms' table. A member who adds a record to the table becomes the 'owner' of that record."];

rooms_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Rooms' table."];
rooms_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Rooms' table."];
rooms_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Rooms' table."];
rooms_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Rooms' table."];

rooms_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Rooms' table."];
rooms_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Rooms' table."];
rooms_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Rooms' table."];
rooms_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Rooms' table, regardless of their owner."];

rooms_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Rooms' table."];
rooms_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Rooms' table."];
rooms_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Rooms' table."];
rooms_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Rooms' table."];

// beds table
beds_addTip=["",spacer+"This option allows all members of the group to add records to the 'Beds' table. A member who adds a record to the table becomes the 'owner' of that record."];

beds_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Beds' table."];
beds_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Beds' table."];
beds_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Beds' table."];
beds_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Beds' table."];

beds_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Beds' table."];
beds_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Beds' table."];
beds_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Beds' table."];
beds_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Beds' table, regardless of their owner."];

beds_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Beds' table."];
beds_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Beds' table."];
beds_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Beds' table."];
beds_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Beds' table."];

// bill table
bill_addTip=["",spacer+"This option allows all members of the group to add records to the 'Bill' table. A member who adds a record to the table becomes the 'owner' of that record."];

bill_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Bill' table."];
bill_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Bill' table."];
bill_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Bill' table."];
bill_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Bill' table."];

bill_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Bill' table."];
bill_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Bill' table."];
bill_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Bill' table."];
bill_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Bill' table, regardless of their owner."];

bill_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Bill' table."];
bill_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Bill' table."];
bill_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Bill' table."];
bill_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Bill' table."];

// invoices table
invoices_addTip=["",spacer+"This option allows all members of the group to add records to the 'Invoices' table. A member who adds a record to the table becomes the 'owner' of that record."];

invoices_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Invoices' table."];
invoices_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Invoices' table."];
invoices_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Invoices' table."];
invoices_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Invoices' table."];

invoices_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Invoices' table."];
invoices_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Invoices' table."];
invoices_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Invoices' table."];
invoices_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Invoices' table, regardless of their owner."];

invoices_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Invoices' table."];
invoices_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Invoices' table."];
invoices_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Invoices' table."];
invoices_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Invoices' table."];

/*
	Style syntax:
	-------------
	[TitleColor,TextColor,TitleBgColor,TextBgColor,TitleBgImag,TextBgImag,TitleTextAlign,
	TextTextAlign,TitleFontFace,TextFontFace, TipPosition, StickyStyle, TitleFontSize,
	TextFontSize, Width, Height, BorderSize, PadTextArea, CoordinateX , CoordinateY,
	TransitionNumber, TransitionDuration, TransparencyLevel ,ShadowType, ShadowColor]

*/

toolTipStyle=["white","#00008B","#000099","#E6E6FA","","images/helpBg.gif","","","","\"Trebuchet MS\", sans-serif","","","","3",400,"",1,2,10,10,51,1,0,"",""];

applyCssFilter();
