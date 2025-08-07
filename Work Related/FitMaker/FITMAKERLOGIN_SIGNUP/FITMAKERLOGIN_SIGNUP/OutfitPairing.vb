Public Class OutfitPairing
    Public bookmarkedOutfitGroups As New List(Of FlowLayoutPanel)
    Private selectedMood As String = ""
    Private randomGen As New Random()

    Private Sub btnHappy_Click(sender As Object, e As EventArgs) Handles btnHappy.Click
        selectedMood = "Happy"
        HighlightSelectedMood(btnHappy)
    End Sub
    Private Sub btnNeutral_Click(sender As Object, e As EventArgs) Handles btnNeutral.Click
        selectedMood = "Neutral"
        HighlightSelectedMood(btnNeutral)
    End Sub
    Private Sub btnSad_Click(sender As Object, e As EventArgs) Handles btnSad.Click
        selectedMood = "Sad"
        HighlightSelectedMood(btnSad)
    End Sub
    Private Sub btnConfident_Click(sender As Object, e As EventArgs) Handles btnConfident.Click
        selectedMood = "Confident"
        HighlightSelectedMood(btnConfident)
    End Sub
    Private Sub btnSporty_Click(sender As Object, e As EventArgs) Handles btnSporty.Click
        selectedMood = "Sporty"
        HighlightSelectedMood(btnSporty)
    End Sub
    Private Sub btnRelaxed_Click(sender As Object, e As EventArgs) Handles btnRelaxed.Click
        selectedMood = "Relaxed"
        HighlightSelectedMood(btnRelaxed)
    End Sub
    Private Sub btnFormal_Click(sender As Object, e As EventArgs) Handles btnFormal.Click
        selectedMood = "Formal"
        HighlightSelectedMood(btnFormal)
    End Sub

    Private Sub HighlightSelectedMood(selectedBtn As Button)
        For Each ctrl As Control In pnlMood.Controls
            If TypeOf ctrl Is Button Then
                CType(ctrl, Button).BackColor = Color.LightGray
            End If
        Next
        selectedBtn.BackColor = Color.LightBlue
    End Sub

    Private Sub OutfitPairing_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        btnBookmark.Visible = False
    End Sub

    Private Sub btnGenerateOutfit_Click(sender As Object, e As EventArgs) Handles btnGenerateOutfit.Click
        If selectedMood = "" Then
            MessageBox.Show("Please select a mood before proceeding.", "Warning", MessageBoxButtons.OK, MessageBoxIcon.Warning)
        Else
            MsgBox("Generating outfit for: " & selectedMood)
            btnBookmark.Visible = True
        End If

        pnlMood.Visible = False
        flpPairedOutfit.Controls.Clear()
        GenerateOutfitForMood(selectedMood)
        btnBookmark.Visible = True
    End Sub

    Private Sub GenerateOutfitForMood(mood As String)
        Dim outfitGroup As New FlowLayoutPanel()
        outfitGroup.FlowDirection = FlowDirection.LeftToRight
        outfitGroup.AutoSize = True
        outfitGroup.WrapContents = False
        outfitGroup.Margin = New Padding(10)

        Dim topwears = New List(Of String) From {"Button Shirt.jpeg", "Hoodie.jpeg", "Long Sleeve Shirt.jpeg", "Oversize Shirt.jpeg", "Round Neck Shirt.jpeg"}
        Dim longpants = New List(Of String) From {"Jeans.jpeg", "Joggers.jpeg", "Cargo Pants.jpeg", "Sweat Pants.jpeg"}
        Dim shorts = New List(Of String) From {"Denim Shorts.jpeg", "Cargo Shorts.jpeg", "Sweat Shorts.jpeg", "Board Shorts.jpeg"}
        Dim skirts = New List(Of String) From {"Mini Skirt.jpg", "A-Line Skirt.jpg", "Maxi Skirt.jpg", "Pencil Skirt.jpg"}
        Dim hijabs = New List(Of String) From {"bawal.jpg", "shawl.jpg", "Slip-On Hijab.jpg"}
        Dim dresses = New List(Of String) From {"casual dress.jpg", "pleated dress.jpg", "Cocktail Dress.jpg"}
        Dim sportwear = New List(Of String) From {"jersey.jpeg", "running shorts.jpeg"}
        Dim formalwear = New List(Of String) From {"formal dress.jpg", "formal pants.jpeg", "Button shirt.jpeg"}

        Select Case mood
            Case "Happy"
                outfitGroup.Controls.Add(CreateOutfitPanel("TopWear\" & topwears(randomGen.Next(topwears.Count)), "Top Wear"))
                outfitGroup.Controls.Add(CreateOutfitPanel("Long Pants\" & longpants(randomGen.Next(longpants.Count)), "Bottom Wear"))

            Case "Neutral"
                outfitGroup.Controls.Add(CreateOutfitPanel("TopWear\" & topwears(randomGen.Next(topwears.Count)), "Top Wear"))
                outfitGroup.Controls.Add(CreateOutfitPanel("Shorts\" & shorts(randomGen.Next(shorts.Count)), "Bottom Wear"))

            Case "Sad"
                outfitGroup.Controls.Add(CreateOutfitPanel("TopWear\Hoodie.jpeg", "Comfort Hoodie"))
                outfitGroup.Controls.Add(CreateOutfitPanel("Long Pants\Joggers.jpeg", "Comfy Joggers"))

            Case "Confident"
                outfitGroup.Controls.Add(CreateOutfitPanel("TopWear\Button Shirt.jpeg", "Power Shirt"))
                outfitGroup.Controls.Add(CreateOutfitPanel("Long Pants\Jeans.jpeg", "Confidence Jeans"))

            Case "Sporty"
                outfitGroup.Controls.Add(CreateOutfitPanel("TopWear\jersey.jpeg", "Sport Top"))
                outfitGroup.Controls.Add(CreateOutfitPanel("Shorts\running shorts.jpeg", "Sport Shorts"))

            Case "Relaxed"
                outfitGroup.Controls.Add(CreateOutfitPanel("TopWear\Oversize Shirt.jpeg", "Oversize Shirt"))
                outfitGroup.Controls.Add(CreateOutfitPanel("Long Pants\Sweat Pants.jpeg", "Sweatpants"))

            Case "Formal"
                outfitGroup.Controls.Add(CreateOutfitPanel("TopWear\Button Shirt.jpeg", "Formal Shirt"))
                outfitGroup.Controls.Add(CreateOutfitPanel("Long Pants\Formal Pants.jpeg", "Formal Pants"))

            Case Else
                outfitGroup.Controls.Add(CreateOutfitPanel("TopWear\" & topwears(randomGen.Next(topwears.Count)), "Top Wear"))
                outfitGroup.Controls.Add(CreateOutfitPanel("Long Pants\" & longpants(randomGen.Next(longpants.Count)), "Bottom Wear"))
        End Select

        flpPairedOutfit.Controls.Add(outfitGroup)
    End Sub


    Private Function CreateOutfitPanel(imagePath As String, labelText As String) As Panel
        Dim panel As New Panel()
        panel.Size = New Size(250, 300)

        Dim pic As New PictureBox()
        pic.Size = New Size(200, 250)
        pic.SizeMode = PictureBoxSizeMode.StretchImage
        pic.Image = Image.FromFile("Image for Outfits\" & imagePath)
        If Not System.IO.File.Exists("Image for Outfits\" & imagePath) Then
            MessageBox.Show("Image file not found: " & imagePath, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error)
            Return Nothing
        End If
        pic.Image = Image.FromFile("Image for Outfits\" & imagePath)
        panel.Controls.Add(pic)

        Dim lbl As New Label()
        lbl.Text = labelText
        lbl.Top = pic.Bottom + 5
        lbl.Size = New Size(200, 30)
        lbl.TextAlign = ContentAlignment.MiddleCenter
        lbl.AutoSize = False
        panel.Controls.Add(lbl)

        Return panel
    End Function
    Private Sub btnBookmark_Click(sender As Object, e As EventArgs) Handles btnBookmark.Click
        Dim outfitGroup As New FlowLayoutPanel()
        outfitGroup.FlowDirection = FlowDirection.LeftToRight
        outfitGroup.AutoSize = True
        outfitGroup.WrapContents = False
        outfitGroup.Margin = New Padding(10)

        For Each item As Control In flpPairedOutfit.Controls
            outfitGroup.Controls.Add(CloneControl(item))
        Next

        MainForm.Bookmark.AddBookmarkedOutfit(outfitGroup, selectedMood)
        MessageBox.Show("Outfit bookmarked!")
        MainForm.switchPanel(MainForm.Bookmark)
    End Sub

    Private Function CloneControl(ctrl As Control) As Control
        If TypeOf ctrl Is FlowLayoutPanel Then
            Dim originalPanel = CType(ctrl, FlowLayoutPanel)
            Dim newPanel As New FlowLayoutPanel()
            newPanel.FlowDirection = originalPanel.FlowDirection
            newPanel.AutoSize = originalPanel.AutoSize
            newPanel.WrapContents = originalPanel.WrapContents
            newPanel.Margin = originalPanel.Margin

            For Each innerCtrl As Control In originalPanel.Controls
                newPanel.Controls.Add(CloneControl(innerCtrl))
            Next
            Return newPanel

        ElseIf TypeOf ctrl Is Panel Then
            Dim original = CType(ctrl, Panel)
            Dim clone As New Panel()
            clone.Size = original.Size
            clone.BackColor = original.BackColor
            For Each child In original.Controls
                clone.Controls.Add(CloneControl(child))
            Next
            Return clone

        ElseIf TypeOf ctrl Is PictureBox Then
            Dim original = CType(ctrl, PictureBox)
            Dim clone As New PictureBox()
            clone.Image = original.Image
            clone.Size = original.Size
            clone.SizeMode = original.SizeMode
            clone.Location = original.Location
            Return clone

        ElseIf TypeOf ctrl Is Label Then
            Dim original = CType(ctrl, Label)
            Dim clone As New Label()
            clone.Text = original.Text
            clone.Font = original.Font
            clone.AutoSize = original.AutoSize
            clone.TextAlign = original.TextAlign
            clone.Location = original.Location
            Return clone
        End If

        Return Nothing
    End Function

    Private Sub btnClear_Click(sender As Object, e As EventArgs) Handles btnClear.Click
        flpPairedOutfit.Controls.Clear()
        pnlMood.Visible = True
        btnBookmark.Visible = False
    End Sub

    Private Sub lblLink_LinkClicked(sender As Object, e As LinkLabelLinkClickedEventArgs)
        Process.Start(New ProcessStartInfo With {
            .FileName = e.Link.LinkData.ToString(),
            .UseShellExecute = True
        })
    End Sub
End Class