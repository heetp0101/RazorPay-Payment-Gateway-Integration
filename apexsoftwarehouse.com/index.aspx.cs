using System;
using System.Data;
using System.Configuration;
using System.Collections;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;
using System.Text;


public partial class index : System.Web.UI.Page
{
  
    protected void Page_Init(object sender, System.EventArgs e)
    {

        if (BrowserCompatibility.IsUplevel)
        {
            Page.ClientTarget = "uplevel";
        }

    }

    protected void btnSubmit_Click(object sender, EventArgs e)
    {
        SendMail();
        RefreshData();
    }

    private void SendMail()
    {
        try
        {
            //STRING BUILDED FOR ANMOLJEEVAN
            if (txtYourEmail.Text != "N/A")
            {

                StringBuilder sbOrder = new StringBuilder();
                SendMail mail = new SendMail();
                sbOrder.Append("<table>");
                sbOrder.Append("<tr><td>Date of Inquiry : </td><td>" + DateTime.Now + "</td></tr>");
                sbOrder.Append("<tr><td>Name : </td><td>" + txtYourName.Text + "</td></tr>");
                sbOrder.Append("<tr><td>Phone : </td><td>" + txtYourPhone.Text + "</td></tr>");
                sbOrder.Append("<tr><td>Email : </td><td>" + txtYourEmail.Text + "</td></tr>");
                sbOrder.Append("<tr><td>Message : </td><td>" + txtYourMessage.Text + "</td></tr>");
                sbOrder.Append("<table>");
                string Body = null;
                Body = sbOrder.ToString();
                mail.SendMailMessage("info@apexsoftwarehouse.com", "info@apexsoftwarehouse.com", "New Inquiry", Body);


                //STRING BUILDED FOR CLIENT
                StringBuilder sbClient = new StringBuilder();
                sbClient.Append("<table>");
                sbClient.Append("<tr><td colspan=2><P ALIGN=center><strong>Apex Software House</strong></P></BR></td></tr>");
                sbClient.Append("<tr><td><P >Thank's....... </P> </td><td></TR>");
                sbClient.Append("<tr><td><P ALIGN=center><strong>" + txtYourName.Text + "</strong></P></td></tr>");
                sbClient.Append("<table>");
                Body = sbClient.ToString();

                if (txtYourEmail.Text.Length != 0)
                {
                    mail.SendMailMessage("info@apexsoftwarehouse.com", this.txtYourEmail.Text, "Thanks....", Body);
                    Alert.Show("Successfully Send");

                }
            }

        }
        catch (Exception ex)
        {
            Alert.Show(ex.ToString());
        }


    }


    private void RefreshData()
    {
        try
        {
            txtYourName.Text = "";
            txtYourPhone.Text = "";
            txtYourEmail.Text = "";
            txtYourMessage.Text = "";
            txtYourName.Focus();


        }
        catch (Exception ex)
        {
        }

    }
}
