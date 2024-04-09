+++
title = "Logging database content changes in a Play Framework app"
date = "2012-06-20 22:40:48"
slug = "logging-database-content-changes-in-a-play-framework-app"
[taxonomies]
tags = ['database','general','hibernate','java','play']
[extra]
show_comments = "true"
+++

To do this we use [Hibernate Envers](http://docs.jboss.org/envers/docs/index.html).

There are 3 easy steps to adding change logging to the data in your existing [Play Framework](http://playframework.org) app (I am using 1.2.4 – version 2 may well be different):

1. Add the library
2. Add the standard configuration
3. Add an annotation to each class where you want to track data changes

Add the library in conf/dependencies.yml
----------------------------------------

```
require:
    - play
    - play -> crud
    - org.hibernate -> hibernate-envers 3.6.1.Final:
        exclude:
            - org.hibernate -> hibernate-tools 3.2.0.ga
            - org.beanshell -> bsh 2.0b4
            - freemarker -> freemarker 2.3.8
            - org.hibernate -> jtidy r8-20060801
            - ant -> ant 1.6.5

```

Add the Envers configuration to conf/application.conf
-----------------------------------------------------

```
# Hibernate Envers Auditing Library conf
hibernate.ejb.event.post-insert=org.hibernate.ejb.event.EJB3PostInsertEventListener,org.hibernate.envers.event.AuditEventListener
hibernate.ejb.event.post-update=org.hibernate.ejb.event.EJB3PostUpdateEventListener,org.hibernate.envers.event.AuditEventListener
hibernate.ejb.event.post-delete=org.hibernate.ejb.event.EJB3PostDeleteEventListener,org.hibernate.envers.event.AuditEventListener
hibernate.ejb.event.pre-collection-update=org.hibernate.envers.event.AuditEventListener
hibernate.ejb.event.pre-collection-remove=org.hibernate.envers.event.AuditEventListener
hibernate.ejb.event.post-collection-recreate=org.hibernate.envers.event.AuditEventListener

```

Add an annotation to each class you want to audit
-------------------------------------------------

```
...
import org.hibernate.envers.Audited;
...

@Entity
@Audited
public class Book extends Model {
  public String title;
  public String author;
  public String description;
}

```

If you run up your app and make a change to an entity you will see a new table appear in your database. If your entity table is BOOK your new table will be BOOK\_AUD. It contains a version reference (a normalised reference to a new **revinfo** table containing the timestamp of that audit entry) and the values of all the fields on the entity after the changes were saved.

You can go wild on the config by auditing only particular fields on an entity (just add @Audited to those fields), or [adding new fields to the audit log](http://docs.jboss.org/hibernate/envers/3.6/reference/en-US/html/revisionlog.html) (like who made the change or [what method was called](https://groups.google.com/d/msg/play-framework/Lmxnwokx10k/u_5K4YvJSLoJ) to do it), and [change the name of table suffix](http://docs.jboss.org/envers/docs/index.html#configuration).

It’s also quite simple to retrieve the list of versions, and this has been written up quite clearly by [Matthieu Guillermin](http://blog.matthieuguillermin.fr/2011/02/utiliser-envers-avec-play-framework/) (it’s in French but Google Translate does a good job, and you can read the code anyway).

All of this information had already been written in several places, but hopefully this has brought it together in a useful way.

My config changes are from <https://gist.github.com/1148850> and <https://gist.github.com/1148852> by Marc Deschamps.
