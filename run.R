# devtools::install_github("sckott/analogsea")
# brew install libssh
# devtools::install_github('ropensci/ssh')

# $ORIGIN milanding.ovh.
# $TTL 1800
# milanding.ovh. IN SOA ns1.digitalocean.com. hostmaster.milanding.ovh. 1508701286 10800 3600 604800 1800
# milanding.ovh. 1800 IN NS ns1.digitalocean.com.
# milanding.ovh. 1800 IN NS ns2.digitalocean.com.
# milanding.ovh. 1800 IN NS ns3.digitalocean.com.
# milanding.ovh. 1800 IN A 188.226.139.110
# *.milanding.ovh. 1800 IN CNAME milanding.ovh.



library("analogsea")


keys <- keys()
keys$`jrcajide-new`
(snaps <- snapshots())
snaps$`web-server-gtm_website`
droplet_name <- 'gtmwebsite'
domain_name <- 'milanding.ovh'
(running_droplets<-droplets())
(active_domains <- domains())

if(droplet_name %in% names(running_droplets)) {
  droplet_delete(droplet_name)
}

if(domain_name %in% names(active_domains)) {
  domain_delete(domain_name)
}

getOption("do_region", "ams3")
getOption("do_image", snaps$`webservergtm-website-512mb-ams2-01-1480632878828-2gb-ams2-01-1508708763`)

gtm_droplet <- droplet_create(name = droplet_name, 
                              size = 's-1vcpu-2gb', 
                              region = 'ams3', 
                              ssh_keys = keys$`jrcajide-new`$id,
                              image=snaps$`web-server-gtm_website`$id)

gtm_droplet <- droplet_create(name = droplet_name, 
                              size = 's-1vcpu-2gb', 
                              region = 'ams3', 
                              ssh_keys = keys$`jrcajide-new`$id, 
                              image='webservergtm-website-amsterdam')
                              )


standardise_keys(keys$`jrcajide-new`$id)
library(jsonlite)
res <- do_POST('droplets',
               body = list(
                 name = unbox(droplet_name),
                 size = unbox('s-1vcpu-2gb'),
                 image = unbox(snaps$`webservergtm-website-amsterdam`),
                 region = unbox(region),
                 ssh_keys = I(ssh_keys),
                 backups = unbox(backups),
                 ipv6 = unbox(ipv6),
                 private_networking = unbox(private_networking),
                 tags = I(tags),
                 user_data = unbox(user_data)
               ), ...
)

# Obtener ip del droplet


(running_droplets<-droplets())

gtm_droplet_ip <- running_droplets[['gtmwebsite']]$networks$v4[[1]]$ip_address
dom <- domain_create(domain_name, gtm_droplet_ip)

dr <- domain_record_create(dom, "CNAME", name = "*.", data = "@", ttl = 1800)


droplet_ssh("apt-get update")
paste0("ssh root@",gtm_droplet_ip)


# FIN
droplet_delete(droplet_name)
