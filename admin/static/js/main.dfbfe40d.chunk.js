(this.webpackJsonpclient=this.webpackJsonpclient||[]).push([[0],{290:function(e,t,a){},295:function(e,t,a){},390:function(e,t,a){},480:function(e,t,a){},490:function(e,t,a){"use strict";a.r(t);var n=a(1),c=a(0),r=a.n(c),i=a(16),s=a.n(i),o=(a(290),a(25)),l=a(19),d=a(10),j=Object(d.b)({key:"FILES",default:[]}),b=Object(d.b)({key:"CURRENT_COURSE",default:{id:"",title:"",number:"",credits:"",offered:"",contents:"",dept:"",reviews:[],driveFiles:[]}}),u={FilesToUpload:j,User:Object(d.b)({key:"USER",default:{loggedIn:!1,username:"",token:""}}),CurrentCourse:b,ModalOpen:Object(d.b)({key:"MODAL_OPEN",default:!1}),Loading:Object(d.b)({key:"LOADING",default:!1})},p=a(9),O=a(155),h=function(e){var t=e.component,a=Object(O.a)(e,["component"]),c=Object(d.d)(u.User).loggedIn;return Object(n.jsx)(l.b,Object(p.a)(Object(p.a)({},a),{},{render:function(e){return c?Object(n.jsx)(t,Object(p.a)(Object(p.a)({},a),e)):Object(n.jsx)(l.a,{to:{pathname:"/unauthorized"}})}}))},m=(a(295),function(){return Object(c.useEffect)((function(){return document.body.classList.add("body-403"),function(){document.body.classList.remove("body-403")}})),Object(n.jsxs)(c.Fragment,{children:[Object(n.jsxs)("div",{className:"gandalf",children:[Object(n.jsx)("div",{className:"fireball"}),Object(n.jsx)("div",{className:"skirt"}),Object(n.jsx)("div",{className:"sleeves"}),Object(n.jsxs)("div",{className:"shoulders",children:[Object(n.jsx)("div",{className:"hand left"}),Object(n.jsx)("div",{className:"hand right"})]}),Object(n.jsxs)("div",{className:"head",children:[Object(n.jsx)("div",{className:"hair"}),Object(n.jsx)("div",{className:"beard"})]})]}),Object(n.jsxs)("div",{className:"message",children:[Object(n.jsx)("h1",{children:"403 - You Shall Not Pass"}),Object(n.jsxs)("p",{children:["Uh oh, Gandalf is blocking the way!",Object(n.jsx)("br",{}),"Maybe you have a typo in the url? Or you meant to go to a different location? Like...Hobbiton?"]})]})]})}),x=a(33),g=a.n(x),f=a(86),v=a(7),C=a(50),y=a(543),w=a(546),S=a(547),N=a(548),k=a(157),T=a(583),B=a(550),F=a(578),I=a(551),U=a(49),E=a(537),W=a(579),P=a(575),L=a(542),R=a(582);function D(e){var t=r.a.useState(""),a=Object(v.a)(t,2),c=a[0],i=a[1];return Object(n.jsxs)(r.a.Fragment,{children:[Object(n.jsx)(U.a,{variant:"h6",gutterBottom:!0,children:"Course Details"}),Object(n.jsxs)(E.a,{container:!0,spacing:3,children:[Object(n.jsx)(E.a,{item:!0,xs:12,md:6,children:Object(n.jsx)(W.a,{required:!0,label:"Course Number",fullWidth:!0,onChange:function(t){e.set(Object(p.a)(Object(p.a)({},e.state),{},{number:t.target.value.toUpperCase().trim()}))}})}),Object(n.jsx)(E.a,{item:!0,xs:12,md:6,children:Object(n.jsx)(W.a,{required:!0,label:"Course Department",fullWidth:!0,onChange:function(t){e.set(Object(p.a)(Object(p.a)({},e.state),{},{dept:t.target.value.toUpperCase().trim()}))}})}),Object(n.jsx)(E.a,{item:!0,xs:12,md:6,children:Object(n.jsx)(W.a,{required:!0,id:"expDate",label:"Credits",fullWidth:!0,onChange:function(t){e.set(Object(p.a)(Object(p.a)({},e.state),{},{credits:t.target.value.toUpperCase().trim()}))}})}),Object(n.jsxs)(E.a,{item:!0,xs:12,md:6,children:[Object(n.jsx)(R.a,{id:"demo-simple-select-label",children:"Semester"}),Object(n.jsxs)(P.a,{labelId:"demo-simple-select-label",id:"demo-simple-select",value:c,onChange:function(t){i(t.target.value),e.set(Object(p.a)(Object(p.a)({},e.state),{},{offered:t.target.value}))},fullWidth:!0,placeholder:"Semester",children:[Object(n.jsx)(L.a,{value:"Odd",children:"Odd"}),Object(n.jsx)(L.a,{value:"Even",children:"Even"}),Object(n.jsx)(L.a,{value:"Odd & Even",children:"Odd and Even"})]})]}),Object(n.jsx)(E.a,{item:!0,xs:12,children:Object(n.jsx)(W.a,{required:!0,label:"Title",fullWidth:!0,onChange:function(t){e.set(Object(p.a)(Object(p.a)({},e.state),{},{title:t.target.value.toUpperCase().trim()}))}})})]})]})}var A=a(151),z=a(250),q=a(81),H=(a(390),function(e){var t=Object(c.useState)(),a=Object(v.a)(t,2),r=a[0],i=a[1],s=Object(c.useState)(""),o=Object(v.a)(s,2),l=(o[0],o[1]);return Object(n.jsx)("div",{className:"demo-root",children:Object(n.jsx)("div",{className:"demo-section",children:Object(n.jsx)("div",{className:"demo-section-wrapper",children:Object(n.jsx)("div",{style:{border:1},children:Object(n.jsx)("div",{className:"editor",children:Object(n.jsx)(z.Editor,{editorState:r,wrapperClassName:"demo-wrapper",editorClassName:"demo-editor",onEditorStateChange:function(t){i(t),l(Object(q.a)(Object(A.convertToRaw)(t.getCurrentContent()))),e.set(Object(p.a)(Object(p.a)({},e.state),{},{contents:Object(q.a)(Object(A.convertToRaw)(t.getCurrentContent()))}))}})})})})})})}),M=a(541),G=a(492),V=a(544),Y=a(91),J=a.n(Y),X=Object(y.a)((function(e){return{listItem:{padding:e.spacing(1,0)},total:{fontWeight:700},title:{marginTop:e.spacing(2)}}}));function K(e){var t=X(),a=[{name:"Course Code",price:e.state.number},{name:"Course Title",price:e.state.title},{name:"Course Department",price:e.state.dept},{name:"Course Credits",price:e.state.credits},{name:"Semester",price:e.state.offered}];return Object(n.jsxs)(r.a.Fragment,{children:[Object(n.jsx)(U.a,{variant:"h6",gutterBottom:!0,children:"Course Summary"}),Object(n.jsx)(M.a,{disablePadding:!0,children:a.map((function(e){return Object(n.jsxs)(G.a,{className:t.listItem,children:[Object(n.jsx)(V.a,{primary:e.name}),Object(n.jsx)(U.a,{variant:"body2",children:e.price})]},e.name)}))}),Object(n.jsx)(E.a,{container:!0,spacing:2,children:Object(n.jsxs)(E.a,{item:!0,children:[Object(n.jsx)(U.a,{variant:"h6",gutterBottom:!0,className:t.title,children:"Contents"}),Object(n.jsx)(U.a,{gutterBottom:!0,children:Object(n.jsx)(J.a,{children:e.state.contents})})]})})]})}var _=function(e){return"https://anciitk-courses.herokuapp.com/api/".concat(e)},Q=function(){var e=Object(f.a)(g.a.mark((function e(t,a,n){var c,r,i;return g.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return(c=new FormData).append("courseDetails",JSON.stringify(t)),c.append("author",a),e.next=5,fetch(_("secure/addCourse"),{method:"POST",body:c,headers:{Authorization:"Bearer ".concat(n)}});case 5:if((r=e.sent).ok){e.next=8;break}return e.abrupt("return",{message:"We are having trouble connecting to the servers, please try after some time",valid:!1});case 8:return e.next=10,r.json();case 10:return i=e.sent,e.abrupt("return",{message:i.message,valid:!0});case 12:case"end":return e.stop()}}),e)})));return function(t,a,n){return e.apply(this,arguments)}}(),Z=a(549),$=a(545),ee=function(){return Object(n.jsxs)(U.a,{variant:"body2",color:"textSecondary",align:"center",children:["Copyright \xa9 ",Object(n.jsx)($.a,{color:"inherit",href:"https://anciitk.in/",children:"Academic and Career Council, IIT Kanpur"})," ",(new Date).getFullYear(),"."]})},te=Object(y.a)((function(e){return{appBar:{position:"relative"},layout:Object(C.a)({width:"auto",marginLeft:e.spacing(2),marginRight:e.spacing(2)},e.breakpoints.up(600+2*e.spacing(2)),{width:600,marginLeft:"auto",marginRight:"auto"}),paper:Object(C.a)({marginTop:e.spacing(3),marginBottom:e.spacing(3),padding:e.spacing(2)},e.breakpoints.up(600+2*e.spacing(3)),{marginTop:e.spacing(6),marginBottom:e.spacing(6),padding:e.spacing(3)}),stepper:{padding:e.spacing(3,0,5)},buttons:{display:"flex",justifyContent:"flex-end"},button:{marginTop:e.spacing(3),marginLeft:e.spacing(1)}}})),ae=["Course Details","Course Content","Review and Submit"],ne=function(){var e=te(),t=r.a.useState(0),a=Object(v.a)(t,2),i=a[0],s=a[1],o=Object(d.d)(u.User).token,j=Object(c.useState)(!1),b=Object(v.a)(j,2),p=b[0],O=b[1],h=Object(d.d)(u.User).username,m=r.a.useState(""),x=Object(v.a)(m,2),C=x[0],y=x[1],E=Object(l.g)(),W=r.a.useState({title:"",number:"",credits:"",offered:"",contents:"",reviews:[],driveFiles:[],id:"",dept:""}),P=Object(v.a)(W,2),L=P[0],R=P[1],A=function(){var e=Object(f.a)(g.a.mark((function e(){var t;return g.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(O(!0),2!==i){e.next=7;break}return e.next=4,Q(L,h,o);case 4:t=e.sent,y(t.message+"Redirecting to home!"),setTimeout((function(){return E.push("/home")}),5e3);case 7:s(i+1),O(!1);case 9:case"end":return e.stop()}}),e)})));return function(){return e.apply(this,arguments)}}();return Object(n.jsxs)(r.a.Fragment,{children:[Object(n.jsx)(w.a,{}),Object(n.jsx)(S.a,{position:"absolute",color:"default",className:e.appBar,children:Object(n.jsx)(N.a,{children:Object(n.jsx)(U.a,{variant:"h6",color:"inherit",noWrap:!0,children:"Add Course"})})}),p&&Object(n.jsx)(Z.a,{color:"secondary"}),Object(n.jsxs)("main",{className:e.layout,children:[Object(n.jsxs)(k.a,{className:e.paper,children:[Object(n.jsx)(U.a,{component:"h1",variant:"h4",align:"center",children:"Add Course"}),Object(n.jsx)(T.a,{activeStep:i,className:e.stepper,children:ae.map((function(e){return Object(n.jsx)(B.a,{children:Object(n.jsx)(F.a,{children:e})},e)}))}),Object(n.jsx)(r.a.Fragment,{children:i===ae.length?Object(n.jsx)(r.a.Fragment,{children:Object(n.jsx)(U.a,{variant:"h5",gutterBottom:!0,children:C})}):Object(n.jsxs)(r.a.Fragment,{children:[function(e){switch(e){case 0:return Object(n.jsx)(D,{set:R,state:L});case 1:return Object(n.jsx)(H,{set:R,state:L});case 2:return Object(n.jsx)(K,{state:L});default:throw new Error("Unknown step")}}(i),Object(n.jsxs)("div",{className:e.buttons,children:[0!==i&&Object(n.jsx)(I.a,{onClick:function(){s(i-1)},className:e.button,children:"Back"}),Object(n.jsx)(I.a,{variant:"contained",color:"primary",onClick:A,className:e.button,disabled:p,children:i===ae.length-1?"Submit Course":"Next"})]})]})})]}),Object(n.jsx)(ee,{})]})]})},ce=a(558),re=a(562),ie=a(560),se=a(559),oe=a(251),le=a.n(oe),de=a(557),je=a(574),be=a(561),ue=a(552),pe=a(556),Oe=a(554),he=a(555),me=a(553),xe=a(23),ge=a.n(xe);function fe(){var e=r.a.useState(!1),t=Object(v.a)(e,2),a=t[0],c=t[1],i=r.a.useState(""),s=Object(v.a)(i,2),o=s[0],d=s[1],j=r.a.useState(!1),b=Object(v.a)(j,2),u=b[0],p=b[1],O=Object(l.g)(),h=function(){ge.a.get(_("search/".concat(o.trim().toUpperCase()))).then((function(e){1===e.data.length?O.push("/edit/".concat(e.data[0].number)):p(!0)}))};return Object(n.jsxs)(n.Fragment,{children:[Object(n.jsx)(I.a,{variant:"outlined",color:"primary",onClick:function(){c(!0)},fullWidth:!0,children:"Open form dialog"}),Object(n.jsxs)(ue.a,{open:a,onClose:h,"aria-labelledby":"form-dialog-title",children:[Object(n.jsx)(me.a,{id:"form-dialog-title",children:"Select Course"}),Object(n.jsxs)(Oe.a,{children:[Object(n.jsx)(he.a,{children:"Please enter the code of course you want to edit."}),Object(n.jsx)(W.a,{autoFocus:!0,margin:"dense",id:"name",label:"Course Code",fullWidth:!0,onChange:function(e){return d(e.currentTarget.value)},error:u})]}),Object(n.jsxs)(pe.a,{children:[Object(n.jsx)(I.a,{onClick:function(){return c(!1)},color:"primary",children:"Cancel"}),Object(n.jsx)(I.a,{onClick:h,color:"primary",children:"Edit"})]})]})]})}var ve=Object(y.a)((function(e){return{"@global":{ul:{margin:0,padding:0,listStyle:"none"}},appBar:{borderBottom:"1px solid ".concat(e.palette.divider)},toolbar:{flexWrap:"wrap"},toolbarTitle:{flexGrow:1},link:{margin:e.spacing(1,1.5)},heroContent:{padding:e.spacing(8,0,6)},cardHeader:{backgroundColor:"light"===e.palette.type?e.palette.grey[200]:e.palette.grey[700]},cardPricing:{display:"flex",justifyContent:"center",alignItems:"baseline",marginBottom:e.spacing(2)},footer:Object(C.a)({borderTop:"1px solid ".concat(e.palette.divider),marginTop:e.spacing(8),paddingTop:e.spacing(3),paddingBottom:e.spacing(3)},e.breakpoints.up("sm"),{paddingTop:e.spacing(6),paddingBottom:e.spacing(6)})}})),Ce=[{title:"Edit Course",price:"0",description:[],buttonText:"Get Started",buttonVariant:"outlined",link:"/edit/eso207"},{title:"New Course",price:"15",description:[],buttonText:"Get started",buttonVariant:"contained",link:"/add"}],ye=function(){var e=ve();return Object(n.jsxs)(r.a.Fragment,{children:[Object(n.jsx)(w.a,{}),Object(n.jsx)(S.a,{position:"static",color:"default",elevation:0,className:e.appBar,children:Object(n.jsxs)(N.a,{className:e.toolbar,children:[Object(n.jsx)(U.a,{variant:"h6",color:"inherit",noWrap:!0,className:e.toolbarTitle,children:"Admin Dashboard"}),Object(n.jsx)(I.a,{href:"#",color:"primary",variant:"outlined",className:e.link,children:"Log Out"})]})}),Object(n.jsxs)(de.a,{maxWidth:"sm",component:"main",className:e.heroContent,children:[Object(n.jsx)(U.a,{component:"h1",variant:"h2",align:"center",color:"textPrimary",gutterBottom:!0,children:"Courses Portal"}),Object(n.jsx)(U.a,{variant:"h5",align:"center",color:"textSecondary",component:"p",children:"Welcome to the Dashboard for Course Info and Review Portal, Academics and Career Council, IIT Kanpur. Choose one of the cards to perform your desired action. There is no validation currently for the data you're entering so proofcheck everything you type."})]}),Object(n.jsx)(de.a,{maxWidth:"md",component:"main",children:Object(n.jsx)(E.a,{container:!0,spacing:5,alignItems:"flex-end",children:Ce.map((function(t,a){return Object(n.jsx)(E.a,{item:!0,xs:12,sm:6,md:4,children:Object(n.jsxs)(ce.a,{children:[Object(n.jsx)(se.a,{title:t.title,titleTypographyProps:{align:"center"},subheaderTypographyProps:{align:"center"},action:"Pro"===t.title?Object(n.jsx)(le.a,{}):null,className:e.cardHeader}),Object(n.jsxs)(ie.a,{children:[Object(n.jsx)("div",{className:e.cardPricing,children:Object(n.jsx)(be.a,{})}),Object(n.jsx)("ul",{children:t.description.map((function(e){return Object(n.jsx)(U.a,{component:"li",variant:"subtitle1",align:"center",children:e},e)}))})]}),Object(n.jsxs)(re.a,{children:["New Course"===t.title&&Object(n.jsx)(o.b,{to:t.link,style:{width:"100%"},children:Object(n.jsx)(I.a,{fullWidth:!0,variant:t.buttonVariant,color:"primary",children:t.buttonText})}),"Edit Course"===t.title&&Object(n.jsx)(fe,{})]})]})},t.title)}))})}),Object(n.jsx)(de.a,{maxWidth:"md",component:"footer",className:e.footer,children:Object(n.jsx)(je.a,{mt:5,children:Object(n.jsx)(ee,{})})})]})},we=(a(480),function(){var e=Object(c.useState)(null),t=Object(v.a)(e,2),a=t[0],i=t[1],s=Object(c.useState)(null),o=Object(v.a)(s,2),l=o[0],d=o[1];return Object(c.useEffect)((function(){return document.body.classList.add("bg"),window.addEventListener("mousemove",(function(e){i(e.pageY),d(e.pageX)})),function(){document.body.classList.remove("bg"),window.removeEventListener("mousemove",(function(e){i(e.pageY),d(e.pageX)}))}})),Object(n.jsxs)(r.a.Fragment,{children:[Object(n.jsxs)("div",{className:"text",children:[Object(n.jsx)("h1",{children:"404"}),Object(n.jsx)("h2",{children:"Uh, Ohh"}),Object(n.jsx)("h3",{children:"Sorry we cant find what you are looking for 'cuz its so dark in here"})]}),Object(n.jsx)("div",{className:"torch",id:"torch",style:{top:a,left:l}})]})}),Se=a(585),Ne=a(564),ke=a(577),Te=a(93),Be=a.n(Te),Fe=a(493),Ie=a(563),Ue=a(584),Ee=a(496),We=a(265),Pe=Object(y.a)((function(e){return Object(Ue.a)({modal:{display:"flex",alignItems:"center",justifyContent:"center"},paper:{backgroundColor:e.palette.background.paper,border:"2px solid #000",boxShadow:e.shadows[5],padding:e.spacing(2,4,3)}})}));function Le(e){var t=Pe(),a=Object(d.c)(u.ModalOpen),c=Object(v.a)(a,2),r=c[0],i=c[1];return Object(n.jsx)("div",{children:Object(n.jsx)(Ee.a,{"aria-labelledby":"transition-modal-title","aria-describedby":"transition-modal-description",className:t.modal,open:r,onClose:function(){i(!1)},closeAfterTransition:!0,BackdropComponent:Fe.a,BackdropProps:{timeout:500},children:Object(n.jsx)(We.a,{in:r,children:Object(n.jsxs)("div",{className:t.paper,children:[Object(n.jsx)("h2",{id:"transition-modal-title",children:e.title}),Object(n.jsx)("p",{id:"transition-modal-description",children:e.description})]})})})})}function Re(){return Object(n.jsxs)(U.a,{variant:"body2",color:"textSecondary",align:"center",children:["Copyright \xa9 ",Object(n.jsx)($.a,{color:"inherit",href:"https://material-ui.com/",children:"Your Website"})," ",(new Date).getFullYear(),"."]})}var De=Object(y.a)((function(e){return{paper:{marginTop:e.spacing(8),display:"flex",flexDirection:"column",alignItems:"center"},avatar:{margin:e.spacing(1),backgroundColor:e.palette.secondary.main},form:{width:"100%",marginTop:e.spacing(1)},submit:{margin:e.spacing(3,0,2)}}})),Ae=function(){var e=De(),t=Object(l.g)(),a=Object(c.useState)(""),r=Object(v.a)(a,2),i=r[0],s=r[1],j=Object(c.useState)(""),b=Object(v.a)(j,2),p=b[0],O=b[1],h=Object(c.useState)(!1),m=Object(v.a)(h,2),x=m[0],g=m[1],f=Object(d.f)(u.User),C=Object(d.f)(u.ModalOpen),y=Object(c.useState)(""),S=Object(v.a)(y,2),N=S[0],k=S[1];return Object(n.jsxs)(n.Fragment,{children:[Object(n.jsxs)(Fe.a,{open:x,children:[Object(n.jsx)(Ie.a,{})," "]}),Object(n.jsxs)(de.a,{component:"main",maxWidth:"xs",children:[Object(n.jsx)(Le,{title:"An Error Occured",description:N}),x&&Object(n.jsx)(Z.a,{color:"secondary"}),Object(n.jsx)(w.a,{}),Object(n.jsxs)("div",{className:e.paper,children:[Object(n.jsx)(Se.a,{className:e.avatar,children:Object(n.jsx)(Be.a,{})}),Object(n.jsx)(U.a,{component:"h1",variant:"h5",children:"Sign In"}),Object(n.jsxs)("form",{className:e.form,noValidate:!0,children:[Object(n.jsx)(W.a,{variant:"outlined",margin:"normal",required:!0,fullWidth:!0,id:"username",label:"Username",name:"username",autoComplete:"username",autoFocus:!0,onChange:function(e){return s(e.target.value)}}),Object(n.jsx)(W.a,{variant:"outlined",margin:"normal",required:!0,fullWidth:!0,name:"password",label:"Password",type:"password",id:"password",autoComplete:"current-password",onChange:function(e){return O(e.target.value)}}),Object(n.jsx)(Ne.a,{control:Object(n.jsx)(ke.a,{value:"remember",color:"primary"}),label:"Remember me"}),Object(n.jsx)(I.a,{fullWidth:!0,variant:"contained",color:"primary",className:e.submit,onClick:function(){g(!0),ge.a.post(_("secure/signin"),{username:i.trim(),password:p.trim()}).then((function(e){f({loggedIn:!0,username:e.data.username,token:e.data.token}),t.push("home")})).catch((function(e){var t;C(!0),k((null===(t=e.response)||void 0===t?void 0:t.data.message)||"Internal Server Error")})),g(!1)},disabled:x,children:"Sign In"}),Object(n.jsxs)(E.a,{container:!0,children:[Object(n.jsx)(E.a,{item:!0,xs:!0,children:Object(n.jsx)(o.b,{to:"/forgot",children:"Forgot password?"})}),Object(n.jsx)(E.a,{item:!0,children:Object(n.jsx)($.a,{href:"#",variant:"body2",children:"Don't have an account? Sign Up"})})]})]})]}),Object(n.jsx)(je.a,{mt:8,children:Object(n.jsx)(Re,{})})]})]})},ze=a(3),qe=a(494),He=a(259),Me=a.n(He),Ge=a(566),Ve=a(567),Ye=a(94),Je=a.n(Ye),Xe=a(565),Ke=Object(y.a)((function(e){return Object(Ue.a)({appBar:{position:"relative"},title:{marginLeft:e.spacing(2),flex:1}})})),_e=r.a.forwardRef((function(e,t){return Object(n.jsx)(Xe.a,Object(p.a)({direction:"up",ref:t},e))}));function Qe(e){var t=Ke(),a=Object(d.d)(u.User).token,c=Object(d.c)(u.CurrentCourse),i=Object(v.a)(c,2),s=i[0],o=i[1],j=Object(d.c)(u.Loading),b=Object(v.a)(j,2),p=b[0],O=b[1],h=r.a.useState(""),m=Object(v.a)(h,2),x=m[0],g=m[1],f=r.a.useState({contents:Object(q.b)(e.text)}),C=Object(v.a)(f,2),y=C[0],w=C[1],k=Object(l.g)(),T=Object(d.f)(u.ModalOpen),B=function(){e.handleClose()};return Object(n.jsxs)(n.Fragment,{children:[Object(n.jsx)(Le,{title:"An Error Occured",description:x}),Object(n.jsxs)(ue.a,{fullScreen:!0,open:e.open,onClose:B,TransitionComponent:_e,children:[Object(n.jsx)(S.a,{className:t.appBar,children:Object(n.jsxs)(N.a,{children:[Object(n.jsx)(qe.a,{edge:"start",color:"inherit",onClick:B,"aria-label":"close",children:Object(n.jsx)(Je.a,{})}),Object(n.jsx)(U.a,{variant:"h6",className:t.title,children:"Edit Content"}),Object(n.jsx)(I.a,{autoFocus:!0,color:"inherit",onClick:function(){O(!0),ge.a.post(_("secure/editCourse/".concat(s.id)),{contents:y.contents},{headers:{Authorization:"Bearer ".concat(a)}}).then((function(e){ge.a.get(_("secure/getCourse/".concat(s.number.toUpperCase())),{headers:{Authorization:"Bearer ".concat(a)}}).then((function(e){o(e.data)})).catch((function(e){k.push("/404")})),O(!1),B()})).catch((function(e){var t;T(!0),g((null===(t=e.response)||void 0===t?void 0:t.data.message)||"Internal Server Error"),O(!1)}))},disabled:p,children:"save"})]})}),Object(n.jsx)(H,{set:w,state:y})]})]})}var Ze=Object(y.a)((function(e){return Object(Ue.a)({fab:{position:"sticky",bottom:e.spacing(2),right:e.spacing(2)}})})),$e=function(e){var t=Ze(),a=r.a.useState(!1),i=Object(v.a)(a,2),s=i[0],o=i[1];return Object(n.jsxs)(c.Fragment,{children:[Object(n.jsxs)(U.a,{children:[Object(n.jsx)(J.a,{children:e.contents}),Object(n.jsx)(Ge.a,{className:t.fab,onClick:function(){o(!0)},children:Object(n.jsx)(Ve.a,{})})]}),Object(n.jsx)(Qe,{open:s,handleClose:function(){o(!1)},text:e.contents})]})},et=a(569),tt=a(262),at=a(153),nt=a.n(at),ct=a(586),rt=a(576);function it(e){return Object(n.jsx)(rt.a,Object(p.a)({elevation:6,variant:"filled"},e))}var st=function(){var e=Object(c.useState)(!1),t=Object(v.a)(e,2),a=t[0],i=t[1],s=r.a.useState(!1),o=Object(v.a)(s,2),l=o[0],j=o[1],b=Object(d.f)(u.FilesToUpload),p=r.a.useState("success"),O=Object(v.a)(p,2),h=O[0],m=O[1],x=Object(d.e)(u.FilesToUpload),g=Object(d.d)(u.CurrentCourse).id,f=Object(d.d)(u.User).token,C=function(e,t){"clickaway"!==t&&j(!1)};return Object(n.jsxs)("div",{children:[Object(n.jsx)(ct.a,{open:l,autoHideDuration:6e3,onClose:C,children:Object(n.jsx)(it,{onClose:C,severity:h,children:"success"===h?"Files have been added! They will appear after processing!":"Error! Failed to add files!"})}),Object(n.jsx)(I.a,{variant:"contained",color:"primary",component:"span",startIcon:Object(n.jsx)(nt.a,{}),onClick:function(){i(!0)},children:"Upload Files"}),Object(n.jsx)(tt.a,{open:a,onSave:function(e){b(e),i(!1);var t=new FormData;e.forEach((function(e){return t.append(e.name,e)})),t.append("cid",g),e&&ge.a.post(_("secure/addFiles"),t,{headers:{Authorization:"Bearer ".concat(f)}}).then((function(e){j(!0),m("success")})).catch((function(e){j(!0),m("error")}))},acceptedFiles:["application/pdf","application/msword","application/vnd.ms-powerpoint","application/vnd.openxmlformats-officedocument.presentationml.presentation","application/vnd.rar","application/zip"],showPreviews:!0,maxFileSize:5e6,onClose:function(){x(),i(!1)},dialogTitle:"Upload Files(upto 3)"})]})},ot=a(152),lt=a.n(ot),dt=Object(y.a)((function(e){return{root:{width:"100%",backgroundColor:e.palette.background.paper}}})),jt=function(){var e=dt(),t=Object(d.d)(u.CurrentCourse).driveFiles.map((function(e){return JSON.parse(e)}));return Object(n.jsxs)("div",{className:e.root,children:[Object(n.jsx)(M.a,{component:"nav","aria-label":"main mailbox folders",dense:!0,children:t.map((function(e){return Object(n.jsxs)(G.a,{children:[Object(n.jsx)(V.a,{primary:e.name}),Object(n.jsx)(et.a,{children:Object(n.jsx)(qe.a,{edge:"end","aria-label":"delete",children:Object(n.jsx)(lt.a,{})})})]})}))}),Object(n.jsx)(st,{})]})},bt=a(260),ut=a.n(bt),pt=a(572),Ot=a(580),ht=a(571),mt=a(570),xt=a(258),gt=a.n(xt),ft=Object(y.a)((function(e){return Object(Ue.a)({root:{width:"100%"},heading:{fontSize:e.typography.pxToRem(15),flexBasis:"33.33%",flexShrink:0},secondaryHeading:{fontSize:e.typography.pxToRem(15),color:e.palette.text.secondary}})}));function vt(e){var t=ft(),a=r.a.useState(!1),i=Object(v.a)(a,2),s=i[0],o=i[1],l=Object(d.d)(u.User).token,j=Object(c.useState)([]),b=Object(v.a)(j,2),p=b[0],O=b[1];Object(c.useEffect)((function(){ge.a.get(_("secure/getReviews/".concat(e.cid)),{headers:{Authorization:"Bearer ".concat(l)}}).then((function(e){O(e.data)}))}),[]);return Object(n.jsx)("div",{className:t.root,children:p.map((function(e,a){return Object(n.jsxs)(Ot.a,{expanded:s==="panel"+a,onChange:(c="panel"+a,function(e,t){o(!!t&&c)}),children:[Object(n.jsxs)(mt.a,{expandIcon:Object(n.jsx)(gt.a,{}),"aria-controls":"panel".concat(a,"bh-content"),id:"panel".concat(a,"bh-header"),children:[Object(n.jsx)(U.a,{className:t.heading,children:e.semester}),Object(n.jsx)(U.a,{className:t.secondaryHeading,children:e.semester})]}),Object(n.jsx)(ht.a,{children:Object(n.jsx)(U.a,{children:Object(n.jsx)(J.a,{children:e.grading})})})]});var c}))})}var Ct=Object(y.a)((function(e){return Object(Ue.a)({appBar:{position:"relative"},title:{marginLeft:e.spacing(2),flex:1}})})),yt=r.a.forwardRef((function(e,t){return Object(n.jsx)(Xe.a,Object(p.a)({direction:"up",ref:t},e))}));function wt(e){var t=Ct(),a=Object(d.d)(u.User).token,i=Object(d.c)(u.CurrentCourse),s=Object(v.a)(i,2),o=s[0],j=(s[1],Object(d.c)(u.Loading)),b=Object(v.a)(j,2),p=b[0],O=b[1],h=Object(c.useState)(""),m=Object(v.a)(h,2),x=m[0],g=m[1],f=Object(c.useState)(""),C=Object(v.a)(f,2),y=C[0],w=C[1],k=r.a.useState(""),T=Object(v.a)(k,2),B=T[0],F=T[1],P=r.a.useState({contents:Object(q.b)(e.text)}),L=Object(v.a)(P,2),R=L[0],D=L[1],A=(Object(l.g)(),Object(d.f)(u.ModalOpen)),z=function(){e.handleClose()};return Object(n.jsxs)(n.Fragment,{children:[Object(n.jsx)(Le,{title:"An Error Occured",description:B}),Object(n.jsxs)(ue.a,{fullScreen:!0,open:e.open,onClose:z,TransitionComponent:yt,children:[Object(n.jsx)(S.a,{className:t.appBar,children:Object(n.jsxs)(N.a,{children:[Object(n.jsx)(qe.a,{edge:"start",color:"inherit",onClick:z,"aria-label":"close",children:Object(n.jsx)(Je.a,{})}),Object(n.jsx)(U.a,{variant:"h6",className:t.title,children:"Add Review"}),Object(n.jsx)(I.a,{autoFocus:!0,color:"inherit",onClick:function(){O(!0),ge.a.post(_("secure/addReview"),{course:o.number,semester:x,instructor:y,grading:R.contents},{headers:{Authorization:"Bearer ".concat(a)}}).then((function(e){O(!1),z()})).catch((function(e){var t;A(!0),F((null===(t=e.response)||void 0===t?void 0:t.data.message)||"Internal Server Error"),O(!1)}))},disabled:p,children:"save"})]})}),Object(n.jsxs)(E.a,{container:!0,spacing:3,children:[Object(n.jsx)(E.a,{item:!0,xs:12,md:6,children:Object(n.jsx)(W.a,{required:!0,label:"Instructor",fullWidth:!0,onChange:function(e){w(e.currentTarget.value)}})}),Object(n.jsx)(E.a,{item:!0,xs:12,md:6,children:Object(n.jsx)(W.a,{required:!0,label:"Semester",fullWidth:!0,onChange:function(e){g(e.currentTarget.value)}})})]}),Object(n.jsx)(H,{set:D,state:R})]})]})}var St=Object(y.a)((function(e){return{root:{display:"flex"},toolbar:{paddingRight:24},toolbarIcon:Object(p.a)({display:"flex",alignItems:"center",justifyContent:"flex-end",padding:"0 8px"},e.mixins.toolbar),appBar:{zIndex:e.zIndex.drawer+1,transition:e.transitions.create(["width","margin"],{easing:e.transitions.easing.sharp,duration:e.transitions.duration.leavingScreen})},appBarShift:{transition:e.transitions.create(["width","margin"],{easing:e.transitions.easing.sharp,duration:e.transitions.duration.enteringScreen})},menuButton:{marginRight:36},menuButtonHidden:{display:"none"},title:{flexGrow:1},drawerPaper:{position:"relative",whiteSpace:"nowrap",width:240,transition:e.transitions.create("width",{easing:e.transitions.easing.sharp,duration:e.transitions.duration.enteringScreen})},drawerPaperClose:Object(C.a)({overflowX:"hidden",transition:e.transitions.create("width",{easing:e.transitions.easing.sharp,duration:e.transitions.duration.leavingScreen}),width:e.spacing(7)},e.breakpoints.up("sm"),{width:e.spacing(9)}),appBarSpacer:e.mixins.toolbar,content:{flexGrow:1,height:"100vh",overflow:"auto"},container:{paddingTop:e.spacing(4),paddingBottom:e.spacing(4)},paper:{padding:e.spacing(2),display:"flex",overflow:"auto",flexDirection:"column"},fixedHeight:{height:"50vh"}}})),Nt=function(){var e=St(),t=r.a.useState(!0),a=Object(v.a)(t,2),c=a[0],i=a[1],s=r.a.useState(!1),l=Object(v.a)(s,2),j=l[0],b=l[1],p=Object(d.d)(u.CurrentCourse),O=Object(d.d)(u.Loading),h=Object(ze.a)(e.paper,e.fixedHeight);return Object(n.jsxs)("div",{className:e.root,children:[Object(n.jsx)(w.a,{}),Object(n.jsx)(S.a,{position:"absolute",className:Object(ze.a)(e.appBar,c&&e.appBarShift),children:Object(n.jsxs)(N.a,{className:e.toolbar,children:[Object(n.jsx)(qe.a,{edge:"start",color:"inherit","aria-label":"open drawer",onClick:function(){i(!0)},className:Object(ze.a)(e.menuButton,c&&e.menuButtonHidden),children:Object(n.jsx)(Me.a,{})}),Object(n.jsx)(U.a,{component:"h1",variant:"h6",color:"inherit",noWrap:!0,className:e.title,children:p.title}),Object(n.jsx)(qe.a,{color:"inherit",children:Object(n.jsx)(o.b,{to:"/home",style:{textDecoration:"none"},children:Object(n.jsx)(pt.a,{style:{fill:"white"}})})}),Object(n.jsx)(qe.a,{color:"inherit",children:Object(n.jsx)(ut.a,{})})]})}),Object(n.jsxs)("main",{className:e.content,children:[Object(n.jsx)("div",{className:e.appBarSpacer}),!0===O&&Object(n.jsx)(Z.a,{color:"secondary"}),Object(n.jsxs)(de.a,{maxWidth:"lg",className:e.container,children:[Object(n.jsxs)(E.a,{container:!0,spacing:3,children:[Object(n.jsx)(E.a,{item:!0,xs:12,md:8,lg:8,children:Object(n.jsx)(k.a,{className:h,children:Object(n.jsx)($e,{contents:p.contents})})}),Object(n.jsx)(E.a,{item:!0,xs:12,md:4,lg:4,children:Object(n.jsx)(k.a,{className:h,children:Object(n.jsx)(jt,{})})}),Object(n.jsxs)(E.a,{item:!0,xs:12,children:[Object(n.jsx)(k.a,{className:e.paper,children:Object(n.jsx)(vt,{cid:p.number})}),Object(n.jsx)(I.a,{variant:"contained",color:"primary",component:"span",style:{marginTop:"4px"},onClick:function(){return b(!0)},children:"Add Review"}),Object(n.jsx)(wt,{open:j,handleClose:function(){return b(!1)}})]})]}),Object(n.jsx)(je.a,{pt:4,children:Object(n.jsx)(ee,{})})]})]})]})},kt=function(){var e=Object(l.h)(),t=Object(l.g)(),a=Object(d.f)(u.CurrentCourse),r=Object(d.f)(u.Loading),i=Object(d.d)(u.User).token;return Object(c.useEffect)((function(){r(!0),ge.a.get(_("secure/getCourse/".concat(e.cid.toUpperCase())),{headers:{Authorization:"Bearer ".concat(i)}}).then((function(e){a(e.data)})).catch((function(e){t.push("/404")})),r(!1)}),[e]),Object(n.jsx)(Nt,{})},Tt=Object(y.a)((function(e){return{paper:{marginTop:e.spacing(8),display:"flex",flexDirection:"column",alignItems:"center"},avatar:{margin:e.spacing(1),backgroundColor:e.palette.secondary.main},form:{width:"100%",marginTop:e.spacing(1)},submit:{margin:e.spacing(3,0,2)}}}));function Bt(){var e=Tt(),t=Object(l.h)(),a=Object(l.g)(),r=Object(c.useState)(""),i=Object(v.a)(r,2),s=i[0],d=i[1],j=Object(c.useState)(!1),b=Object(v.a)(j,2),u=b[0],p=b[1];return Object(n.jsxs)(de.a,{component:"main",maxWidth:"xs",children:[Object(n.jsx)(w.a,{}),Object(n.jsxs)("div",{className:e.paper,children:[Object(n.jsx)(Se.a,{className:e.avatar,children:Object(n.jsx)(Be.a,{})}),Object(n.jsx)(U.a,{component:"h1",variant:"h5",children:"Change Password"}),Object(n.jsxs)("form",{className:e.form,noValidate:!0,children:[Object(n.jsx)(W.a,{variant:"outlined",margin:"normal",required:!0,fullWidth:!0,name:"password",label:"New Password",type:"password",id:"password",autoComplete:"current-password",onChange:function(e){return d(e.currentTarget.value)}}),Object(n.jsx)(I.a,{fullWidth:!0,variant:"contained",color:"primary",className:e.submit,onClick:function(){p(!0),ge.a.post(_("secure/changePassword"),{username:t.username.trim(),password:s.trim()},{headers:{Authorization:"Bearer ".concat(t.token)}}).then((function(e){p(!1),a.push("/signin")})).catch((function(){return p(!1)}))},disabled:u,children:"Submit"}),Object(n.jsx)(E.a,{container:!0,children:Object(n.jsx)(E.a,{item:!0,xs:!0,children:Object(n.jsx)(o.b,{to:"/signin",children:"Sign In"})})})]})]}),Object(n.jsx)(je.a,{mt:8,children:Object(n.jsx)(ee,{})})]})}var Ft=Object(y.a)((function(e){return{paper:{marginTop:e.spacing(8),display:"flex",flexDirection:"column",alignItems:"center"},avatar:{margin:e.spacing(1),backgroundColor:e.palette.secondary.main},form:{width:"100%",marginTop:e.spacing(1)},submit:{margin:e.spacing(3,0,2)}}}));function It(){var e=Ft(),t=Object(l.g)(),a=Object(c.useState)(""),r=Object(v.a)(a,2),i=r[0],s=r[1],d=Object(c.useState)(!1),j=Object(v.a)(d,2),b=j[0],u=j[1];return Object(n.jsxs)(de.a,{component:"main",maxWidth:"xs",children:[Object(n.jsx)(w.a,{}),Object(n.jsxs)("div",{className:e.paper,children:[Object(n.jsx)(Se.a,{className:e.avatar,children:Object(n.jsx)(Be.a,{})}),Object(n.jsx)(U.a,{component:"h1",variant:"h5",children:"Reset Password"}),Object(n.jsxs)("form",{className:e.form,noValidate:!0,children:[Object(n.jsx)(W.a,{variant:"outlined",margin:"normal",required:!0,fullWidth:!0,id:"username",label:"Username",name:"username",autoComplete:"username",autoFocus:!0,onChange:function(e){return s(e.currentTarget.value)}}),Object(n.jsx)(I.a,{fullWidth:!0,variant:"contained",color:"primary",className:e.submit,onClick:function(){u(!0),ge.a.post(_("secure/resetPassword"),{username:i.trim()}).then((function(e){u(!1),t.push("/signin")})).catch((function(){return u(!1)}))},disabled:b,children:"Send Reset Link"}),Object(n.jsx)(E.a,{container:!0,children:Object(n.jsx)(E.a,{item:!0,xs:!0,children:Object(n.jsx)(o.b,{to:"/signin",children:"Sign In"})})})]})]}),Object(n.jsx)(je.a,{mt:8,children:Object(n.jsx)(ee,{})})]})}var Ut=function(){var e=Object(d.d)(u.User).loggedIn,t=Object(d.e)(u.User);return Object(c.useEffect)((function(){!1===e&&t()}),[e]),Object(n.jsx)(o.a,{basename:"/admin",children:Object(n.jsxs)(l.d,{children:[Object(n.jsx)(l.b,{path:"/forgot",component:It}),Object(n.jsx)(l.b,{path:"/404",component:we}),Object(n.jsx)(l.b,{path:"/signin",component:Ae}),Object(n.jsx)(l.b,{path:"/unauthorized",component:m}),Object(n.jsx)(l.b,{path:"/change/:token/:username",component:Bt}),Object(n.jsx)(h,{path:"/home",component:ye}),Object(n.jsx)(h,{path:"/edit/:cid",component:kt}),Object(n.jsx)(h,{path:"/add",component:ne}),Object(n.jsx)(l.a,{from:"*",to:"/signin"})]})})},Et=function(e){e&&e instanceof Function&&a.e(3).then(a.bind(null,588)).then((function(t){var a=t.getCLS,n=t.getFID,c=t.getFCP,r=t.getLCP,i=t.getTTFB;a(e),n(e),c(e),r(e),i(e)}))},Wt=a(573),Pt=a(261),Lt=Object(Pt.a)();s.a.render(Object(n.jsx)(r.a.StrictMode,{children:Object(n.jsx)(Wt.a,{theme:Lt,children:Object(n.jsx)(d.a,{children:Object(n.jsx)(Ut,{})})})}),document.getElementById("root")),Et()}},[[490,1,2]]]);
//# sourceMappingURL=main.dfbfe40d.chunk.js.map