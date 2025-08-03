Imports System.Data.OleDb

Public Class LoginPublic
    Dim conn As New OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=C:\Users\Tham Qi Lien\source\repos\FITMAKERLOGIN_SIGNUP\VP FITMAKER DATABASE.accdb")

    Private Sub btnLogin_Click(sender As Object, e As EventArgs) Handles btnLogin.Click
        Dim email As String = txtEmail.Text.Trim()
        Dim password As String = txtPassword.Text.Trim()

        If email = "" Or password = "" Then
            MessageBox.Show("Please enter both email and password.", "Input Error", MessageBoxButtons.OK, MessageBoxIcon.Warning)
            Return
        End If

        Try
            conn.Open()
            Dim query As String = "SELECT * FROM [User Info] WHERE Email=? AND Password=? AND [Is UTP Student]=False"
            Dim cmd As New OleDbCommand(query, conn)
            cmd.Parameters.AddWithValue("?", email)
            cmd.Parameters.AddWithValue("?", password)

            Dim reader As OleDbDataReader = cmd.ExecuteReader()

            If reader.Read() Then
                Dim fullname As String = reader("Full Name").ToString()
                MessageBox.Show("Welcome, " & fullname & "!", "Login Successful", MessageBoxButtons.OK, MessageBoxIcon.Information)

                ' Redirect to main menu
                Me.Hide()
                'Dim mainForm As New MainAppPublic() ' Replace with your actual main form
                'mainForm.Show()
                ' After combine change to this

            Else
                MessageBox.Show("Login failed. Check your email or password.", "Login Failed", MessageBoxButtons.OK, MessageBoxIcon.Error)
            End If
            conn.Close()

        Catch ex As Exception
            MessageBox.Show("Database error: " & ex.Message)
        End Try
    End Sub

    Private Sub btnBack_Click(sender As Object, e As EventArgs) Handles btnBack.Click
        Me.Hide()
        Dim startupForm As New StartupPage()
        startupForm.Show()
    End Sub
    Private Sub linklbRegisterHere_LinkClicked(sender As Object, e As LinkLabelLinkClickedEventArgs) Handles linklbRegisterHere.LinkClicked
        Me.Hide()
        Dim signUpForm As New SignUpPublicNew()
        SignUpPublicNew.Show()
    End Sub

    Private Sub linklbForgetPassword_LinkClicked(sender As Object, e As LinkLabelLinkClickedEventArgs) Handles linklbForgetPassword.LinkClicked
        Me.Hide()
        Dim resetForm As New ResetPasswordEmail()
        resetForm.Show()
    End Sub
End Class
