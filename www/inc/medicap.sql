/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  01/07/2020 10:53:35                      */
/*==============================================================*/


drop table if exists ADDRESS_BOOK;

drop table if exists ADRESS;

drop table if exists ALLERGIES;

drop table if exists APPEND;

drop table if exists ARTICLES;

drop table if exists CARRY;

drop table if exists CART;

drop table if exists CATEGORY_ARTICLES;

drop table if exists CATEGORY_PRODUCTS;

drop table if exists CONTAIN;

drop table if exists DELIVER;

drop table if exists EVALUATE;

drop table if exists PRESCRIPTIONS;

drop table if exists PRODUCTS;

drop table if exists REPORT;

drop table if exists TREATMENTS;

drop table if exists TYPE_REPORT;

drop table if exists TYPE_USERS;

drop table if exists USERS;

/*==============================================================*/
/* Table : ADDRESS_BOOK                                         */
/*==============================================================*/
create table ADDRESS_BOOK
(
   IDAB                 int not null,
   IDUSERS              int,
   FIRSTNAMEAB          varchar(80) not null,
   NAMEAB               varchar(80) not null,
   STATUS               varchar(100) not null,
   PHONE                int not null,
   primary key (IDAB)
);

/*==============================================================*/
/* Table : ADRESS                                               */
/*==============================================================*/
create table ADRESS
(
   IDADRESS             int not null,
   IDAB                 int not null,
   NUMBER               int not null,
   __STREET_NAME        varchar(255) not null,
   ZIPCODE              int not null,
   CITYNAME             varchar(80) not null,
   __COUNTRY            varchar(80) not null,
   ADDITIONALADDRESS    varchar(500),
   primary key (IDADRESS)
);

/*==============================================================*/
/* Table : ALLERGIES                                            */
/*==============================================================*/
create table ALLERGIES
(
   IDALLERGIES          int not null,
   NAMEALLERGIES        varchar(80) not null,
   ALLERGIESCATEGORY    varchar(100) not null,
   primary key (IDALLERGIES)
);

/*==============================================================*/
/* Table : APPEND                                               */
/*==============================================================*/
create table APPEND
(
   IDPRODUCTS           int not null,
   IDCART               int not null,
   QTPRODUCT            int not null,
   primary key (IDPRODUCTS, IDCART)
);

/*==============================================================*/
/* Table : ARTICLES                                             */
/*==============================================================*/
create table ARTICLES
(
   IDARTICLES           int not null,
   IDUSERS              int not null,
   TITREARTICLES        varchar(30) not null,
   DESCARTICLES         varchar(150) not null,
   BODYARTICLES         varchar(1000) not null,
   DATEPUBLICATION      date not null,
   PHOTOARTICLES        longblob not null,
   primary key (IDARTICLES)
);

/*==============================================================*/
/* Table : CARRY                                                */
/*==============================================================*/
create table CARRY
(
   IDUSERS              int not null,
   IDALLERGIES          int not null,
   primary key (IDUSERS, IDALLERGIES)
);

/*==============================================================*/
/* Table : CART                                                 */
/*==============================================================*/
create table CART
(
   IDCART               int not null,
   IDUSERS              int,
   CAR_IDCART           int,
   PRICECART            float(4,2) not null,
   NBARTICLES           int not null,
   DATEBILLINGS         date,
   primary key (IDCART)
);

/*==============================================================*/
/* Table : CATEGORY_ARTICLES                                    */
/*==============================================================*/
create table CATEGORY_ARTICLES
(
   IDCA                 int not null,
   NAMECA               varchar(80) not null,
   primary key (IDCA)
);

/*==============================================================*/
/* Table : CATEGORY_PRODUCTS                                    */
/*==============================================================*/
create table CATEGORY_PRODUCTS
(
   IDCP                 int not null,
   NAMECP               varchar(80) not null,
   DESCCP               varchar(255) not null,
   primary key (IDCP)
);

/*==============================================================*/
/* Table : CONTAIN                                              */
/*==============================================================*/
create table CONTAIN
(
   IDARTICLES           int not null,
   IDCA                 int not null,
   primary key (IDARTICLES, IDCA)
);

/*==============================================================*/
/* Table : DELIVER                                              */
/*==============================================================*/
create table DELIVER
(
   IDCART               int not null,
   CAR_IDCART           int not null,
   DATEDELIVER          date not null,
   CARRIERS             varchar(80) not null,
   PRICEDELIVER         float(2,2) not null,
   HOURSDELIVER         time not null,
   primary key (IDCART, CAR_IDCART)
);

/*==============================================================*/
/* Table : EVALUATE                                             */
/*==============================================================*/
create table EVALUATE
(
   IDUSERS              int not null,
   IDPRODUCTS           int not null,
   TITLECOMMENT         varchar(80) not null,
   BODYCOMMENT          varchar(500) not null,
   NOTE                 int not null,
   primary key (IDUSERS, IDPRODUCTS)
);

/*==============================================================*/
/* Table : PRESCRIPTIONS                                        */
/*==============================================================*/
create table PRESCRIPTIONS
(
   IDPRESCRIPTION       int not null,
   IDUSERS              int not null,
   DATAVALIDITY         date not null,
   DOCTORPRESCRIPTION   varchar(80),
   DATEDL               date not null,
   primary key (IDPRESCRIPTION)
);

/*==============================================================*/
/* Table : PRODUCTS                                             */
/*==============================================================*/
create table PRODUCTS
(
   IDPRODUCTS           int not null,
   IDCP                 int not null,
   NAMEPRODUCTS         varchar(80) not null,
   DESCRIPTIONPRODUCTS  varchar(500) not null,
   PRICEPRODUCTS        float(4,2) not null,
   RENTPRODUCTS         bool not null,
   __REFERENCE          varchar(255) not null,
   __QUANTITY           int not null,
   primary key (IDPRODUCTS)
);

/*==============================================================*/
/* Table : REPORT                                               */
/*==============================================================*/
create table REPORT
(
   IDREPORT             int not null,
   IDUSERS              int not null,
   IDTYPER              int not null,
   DATEADDITION         date not null,
   DOCTORREPORT         varchar(80) not null,
   primary key (IDREPORT)
);

/*==============================================================*/
/* Table : TREATMENTS                                           */
/*==============================================================*/
create table TREATMENTS
(
   IDTREATMENTS         int not null,
   IDUSERS              int not null,
   NAMETREATMENTS       varchar(80) not null,
   QUANTITY             int not null,
   FREQUENCY            int not null,
   __TIME_OF_TAKING     varchar(80) not null,
   TREATMENTCATEGORY    varchar(150) not null,
   primary key (IDTREATMENTS)
);

/*==============================================================*/
/* Table : TYPE_REPORT                                          */
/*==============================================================*/
create table TYPE_REPORT
(
   IDTYPER              int not null,
   NOMTYPER             varchar(80) not null,
   primary key (IDTYPER)
);

/*==============================================================*/
/* Table : TYPE_USERS                                           */
/*==============================================================*/
create table TYPE_USERS
(
   IDTYPE               int not null,
   NAMETYPE             varchar(50) not null,
   DROITSTYPE           varchar(150) not null,
   primary key (IDTYPE)
);

/*==============================================================*/
/* Table : USERS                                                */
/*==============================================================*/
create table USERS
(
   IDUSERS              int not null,
   IDTYPE               int not null,
   FIRSTNAME            varchar(80) not null,
   NAME                 varchar(80) not null,
   PSW                  varchar(255) not null,
   MAIL                 varchar(255) not null,
   ADDRESSUSERS         varchar(1000) not null,
   DATEBIRTH            date not null,
   __CIVILITY           varchar(10),
   AVATAR               longblob,
   __BANNER             longblob,
   MEANSOFPAYMENT       varchar(80) not null,
   DATEPAYMENT          date not null,
   PRICEPAYMENT         float(4,2) not null,
   primary key (IDUSERS)
);

alter table ADDRESS_BOOK add constraint FK_HAS foreign key (IDUSERS)
      references USERS (IDUSERS) on delete restrict on update restrict;

alter table ADRESS add constraint FK_CONNECT foreign key (IDAB)
      references ADDRESS_BOOK (IDAB) on delete restrict on update restrict;

alter table APPEND add constraint FK_APPEND foreign key (IDCART)
      references CART (IDCART) on delete restrict on update restrict;

alter table APPEND add constraint FK_APPEND2 foreign key (IDPRODUCTS)
      references PRODUCTS (IDPRODUCTS) on delete restrict on update restrict;

alter table ARTICLES add constraint FK_PUBLISH foreign key (IDUSERS)
      references USERS (IDUSERS) on delete restrict on update restrict;

alter table CARRY add constraint FK_CARRY foreign key (IDALLERGIES)
      references ALLERGIES (IDALLERGIES) on delete restrict on update restrict;

alter table CARRY add constraint FK_CARRY2 foreign key (IDUSERS)
      references USERS (IDUSERS) on delete restrict on update restrict;

alter table CART add constraint FK_INVOICE foreign key (CAR_IDCART)
      references CART (IDCART) on delete restrict on update restrict;

alter table CART add constraint FK_PAY foreign key (IDUSERS)
      references USERS (IDUSERS) on delete restrict on update restrict;

alter table CONTAIN add constraint FK_CONTAIN foreign key (IDCA)
      references CATEGORY_ARTICLES (IDCA) on delete restrict on update restrict;

alter table CONTAIN add constraint FK_CONTAIN2 foreign key (IDARTICLES)
      references ARTICLES (IDARTICLES) on delete restrict on update restrict;

alter table DELIVER add constraint FK_DELIVER foreign key (CAR_IDCART)
      references CART (IDCART) on delete restrict on update restrict;

alter table DELIVER add constraint FK_DELIVER2 foreign key (IDCART)
      references CART (IDCART) on delete restrict on update restrict;

alter table EVALUATE add constraint FK_EVALUATE foreign key (IDPRODUCTS)
      references PRODUCTS (IDPRODUCTS) on delete restrict on update restrict;

alter table EVALUATE add constraint FK_EVALUATE2 foreign key (IDUSERS)
      references USERS (IDUSERS) on delete restrict on update restrict;

alter table PRESCRIPTIONS add constraint FK_TORECEIVE foreign key (IDUSERS)
      references USERS (IDUSERS) on delete restrict on update restrict;

alter table PRODUCTS add constraint FK_AFFILIATE foreign key (IDCP)
      references CATEGORY_PRODUCTS (IDCP) on delete restrict on update restrict;

alter table REPORT add constraint FK_ASSOCIATE foreign key (IDUSERS)
      references USERS (IDUSERS) on delete restrict on update restrict;

alter table REPORT add constraint FK_TOINTEGRATE foreign key (IDTYPER)
      references TYPE_REPORT (IDTYPER) on delete restrict on update restrict;

alter table TREATMENTS add constraint FK_TOTAKE foreign key (IDUSERS)
      references USERS (IDUSERS) on delete restrict on update restrict;

alter table USERS add constraint FK_BIND foreign key (IDTYPE)
      references TYPE_USERS (IDTYPE) on delete restrict on update restrict;

